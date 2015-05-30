@extends($template)
@section($content)

        <div class="pull-right">
            <a href="{{ route('forum.conversation.create') }}" type="submit" class="btn btn-sm btn-success">Create Conversation</a>
        </div>

        <br/>
        <br/>

        <ul class="list-group">
            @foreach($conversations as $conversation)
                <li class="list-group-item">
                    <a href="{{ route('forum.conversation.show', $conversation->id) }}">
                        @if(config('forum.avatar'))
                            <img src="" class="img-circle" alt="{{ Auth::User()->email }}"/>
                        @endif
                        <h3>{{ $conversation->title}}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
        {!! $conversations->render() !!}

@stop