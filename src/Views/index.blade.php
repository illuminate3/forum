@extends($template)
@section($content)

    <div class="text-center">
        @include('Forum::Conversations.create')
    </div>

    <br/><br/>


        <ul class="list-group">
            @foreach($conversations as $conversation)
                <li class="list-group-item">
                    <a href="{{ route('forum.conversation.show', $conversation->slug) }}">

                        @if(config('forum.user.avatar'))
                            @include('Forum::Partials.avatar', ['user' => $conversation->user])
                        @endif

                        <h3>{{ $conversation->title}}</h3>

                    </a>
                    <span>{{ $conversation->created_at->diffForHumans() }}</span>

                </li>
            @endforeach
        </ul>
        {!! $conversations->render() !!}

@stop