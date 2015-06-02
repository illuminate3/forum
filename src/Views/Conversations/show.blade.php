@extends($template)
@section($content)

    <div class="forum-header">

        @include('Forum::Partials.avatar', ['user' => $conversation->user])
        <h3 class="post-title">{{ $conversation->title }}</h3>
        <h3 class="post-user">{{ $conversation->user->{config('forum.user.username')} }}</h3>

    </div>


    <div class="forum-body">

        <div class="container conversation-container">

            <article class="item">

                @include('Forum::Partials.avatar', ['user' => $conversation->user])

                <div class="bubble">

                    {!! $conversation->message !!}

                </div>

            </article>


            <span class="num_of_replies_divisor">
                {{ $conversation->replies->count() }} replies with no correct answer yet.
            </span>


            @foreach($replies as $reply)

                    @include('Forum::Replies.show')

            @endforeach

                {!! $replies->render() !!}

            @include('Forum::Replies.form')

       </div>

    </div>









@stop