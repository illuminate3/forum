@extends($template)
@section($content)

        @include('Forum::Partials.avatar', ['user' => $conversation->user])

        <h3>{{ $conversation->title }}</h3>

        <div>{!! $conversation->message !!}</div>

        <hr/>

        @foreach($conversation->replies as $reply)

            <ul>

                @include('Forum::Replies.show')

            </ul>

        @endforeach

        <hr/>

        @include('Forum::Replies.form')

@stop