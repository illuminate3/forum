@extends($template)
@section($content)

    <a href="{{ route('forum.conversations.reply.create')}}"></a>
        <h3>{{ $conversation->title }}</h3>

        <code>{!! $conversation->message !!}</code>

@stop