<article class="item">

    @include('Forum::Partials.avatar', ['user' => $reply->user])

    <div class="bubble">
        <p class="posted_by pull-right">{{ $reply->created_at->diffForHumans() }}</p>

        <p class="posted_by">Posted by <a href="#">{{ $reply->user->{config('forum.user.username')} }}</a></p>

        {!! $reply->message !!}

    </div>


    <div class="bubble-footer">

        <div class="container">

        <form action="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="reply_id" value="{{ $reply->id }}"/>
            <button type="submit" class="glyphicon glyphicon-thumbs-up"></button>
        </form>

        <form action="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="reply_id" value="{{ $reply->id }}"/>
            <button type="submit" class="glyphicon glyphicon-thumbs-down"></button>
        </form>

        <form action="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="reply_id" value="{{ $reply->id }}"/>
            <button type="submit" class="glyphicon glyphicon-ok best_answer"></button>
        </form>

        </div>

    </div>


</article>