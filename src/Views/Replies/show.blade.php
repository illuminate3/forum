<article class="item">

    @include('Forum::Partials.avatar', ['user' => $reply->user])

    <div class="bubble">

        Posted by <a href="#">{{ $reply->user->{config('forum.user.username')} }}</a>

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