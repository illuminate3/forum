<li class="list-group-item">

    @include('Forum::Partials.avatar', ['user' => $conversation->user])

    <div class="replies hidden-xs">
        <span>{{ $conversation->replies->count() }}</span>
        <p>replies</p>
    </div>

    <div class="details">
        <a href="{{ route('forum.conversation.show', $conversation->slug) }}">
            <h3>{{ $conversation->title}}</h3>
        </a>
        <span class="conversation_date">
            Posted {{ $conversation->created_at->diffForHumans() }}
        </span>
        <span class="last_post">
            @if($conversation->replies()->count() > 0)
                 - Last reply by {{ $conversation->replies->last()->user->{config('forum.user.username')} }}
            @endif
        </span>
        <div class="topic">
            <div class="label label-success"><span class="glyphicon glyphicon-tag"></span> {{ $conversation->topic }}</div>
        </div>
    </div>


</li>