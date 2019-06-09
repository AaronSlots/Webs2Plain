<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Run extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is an extended version of the serve command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('<fg=green>Migrating and seeding the database</>');
        call_in_background('migrate:fresh');
        call_in_background('db:seed');
        $this->line('<fg=green>Laravel development server starting: </><https://www.sentje.com>');
        call_in_background('serve --host www.sentje.com --port 80');
    }
}
