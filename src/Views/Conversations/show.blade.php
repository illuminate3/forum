@extends($template)
@section($content)

    <div class="forum-header">
        @include('Forum::Partials.avatar', ['user' => $conversation->user])
        <h3 class="post-title">{{ $conversation->title }}</h3>
        <h3 class="post-user">{{ $conversation->user->email }}</h3>
    </div>


    <div class="forum-body">

        <div>{!! $conversation->message !!}</div>

        @foreach($conversation->replies as $reply)

            @include('Forum::Replies.show')

        @endforeach

        @include('Forum::Replies.form')

    </div>









@stop