@if(config('forum.user.avatar'))
    <img class="img-thumbnail img-circle avatar hidden-xs" src="{{ asset($user->{config('forum.user.user-avatar')} ) }}" alt="{{ $user->{config('forum.user.username')} }}"/>
@endif