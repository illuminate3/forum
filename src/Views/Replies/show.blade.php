<article class="item">

    @include('Forum::Partials.avatar', ['user' => $reply->user])

    <div class="bubble">
        <p class="posted_by pull-right">{{ $reply->created_at->diffForHumans() }}</p>

        <p class="posted_by">Posted by <a href="#">{{ $reply->user->{config('forum.user.username')} }}</a></p>

        {!! $reply->message !!}

    </div>


    <div class="bubble-footer">

        <div class="container">

            <i class="glyphicon glyphicon-thumbs-up"></i>

            <i class="glyphicon glyphicon-thumbs-down"></i>

            <i class="glyphicon glyphicon-ok best_answer"></i>

        </div>

    </div>


</article>