@php($is_admin = App\GroupUser::find(auth()->user()->id,$group->id)->is_admin)

@if ($is_admin)
    <a class="btn card bg-primary text-white" style="max-width: 15rem; min-width:15rem;"  href={{route('groups.members.index',['group'=>$group])}}>
@else
    <div class="btn card bg-primary text-white" style="max-width: 15rem; min-width:15rem;">
@endif
    <div class="card-header">{{ Crypt::decrypt($group->title) }}</div>
    <div class="card-body">
        <p class="card-text">{{ Crypt::decrypt($group->description) }}</p>
    </div>
@if ($is_admin)
    </a>
@else
    </div>
@endif
