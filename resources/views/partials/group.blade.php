<a class="btn card bg-primary text-white" style="max-width: 15rem; min-width:15rem;"  href={{route('groups.show',['group'=>$group])}}>
    <div class="card-header">{{ Crypt::decrypt($group->title) }}</div>
    <div class="card-body">
        <p class="card-text">{{ Crypt::decrypt($group->description) }}</p>
    </div>
</a>
