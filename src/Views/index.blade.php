@extends($template)
@section($content)

        @include('Forum::Conversations.create')

        <ul class="list-group">
            @foreach($conversations as $conversation)
                <li class="list-group-item">
                    <a href="{{ route('forum.conversation.show', $conversation->id) }}">

                        @if(config('forum.user.avatar'))
                            <img src="{{ asset($conversation->user->avatar) }}" class="img-circle avatar" alt="{{ $conversation->user->email }}"/>
                        @endif

                        <h3>{{ $conversation->title}}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
        {!! $conversations->render() !!}

@stop