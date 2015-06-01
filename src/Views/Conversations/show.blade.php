@extends($template)
@section($content)

    <div class="forum-header">
        @include('Forum::Partials.avatar', ['user' => $conversation->user])
        <h3 class="post-title">{{ $conversation->title }}</h3>
        <h3 class="post-user">{{ $conversation->user->email }}</h3>
    </div>


    <div class="forum-body">
                <div class="container">

        <div>{!! $conversation->message !!}</div>


            @foreach($replies as $reply)
            <div class="row">

                <div class="col-md-12">
                    @include('Forum::Replies.show')
                </div>

            </div>
            @endforeach

                {!! $replies->render() !!}

            @include('Forum::Replies.form')
                </div>

    </div>









@stop