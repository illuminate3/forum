@extends($template)
@section($content)

    <form action="{{ route('forum.conversation.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group @if($errors->has('title')) has-error @endif">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control"/>
                    @if($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group @if($errors->has('topic_id')) has-error @endif">
                    <label for="title">Topic</label>
                    <select name="topic_id" class="form-control">

                        @foreach(config('forum.topics') as $key => $topic)
                            <option value="{{ $key }}">{{ $topic }}</option>
                        @endforeach

                    </select>
                    @if($errors->has('title')) <p class="help-block">{{ $errors->first('topic_id') }}</p> @endif
                </div>
            </div>
        </div>

        <div class="form-group @if($errors->has('message')) has-error @endif">
            <label for="message">Message</label>
            <textarea class="form-control" rows="10" style="resize:none" name="message"></textarea>
            @if($errors->has('title')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
        </div>

        <div class="form-group">
            <a href="{{ route('forum')}}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary pull-right">Post conversation</button>
        </div>

    </form>

@stop