
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Start a Conversation
</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Start a Conversation</h4>
      </div>
                  <form action="{{ route('forum.conversation.store') }}" method="POST">

      <div class="modal-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                <div class="form-group @if($errors->has('title')) has-error @endif">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control"/>
                    @if($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                </div>

                <div class="form-group @if($errors->has('topic_id')) has-error @endif">
                    <label for="title">Topic</label>
                    <select name="topic_id" class="form-control">

                        @foreach(config('forum.topics') as $key => $topic)
                            <option value="{{ $key }}">{{ $topic }}</option>
                        @endforeach

                    </select>
                    @if($errors->has('title')) <p class="help-block">{{ $errors->first('topic_id') }}</p> @endif
                </div>

                <div class="form-group @if($errors->has('message')) has-error @endif">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="10" style="resize:none" name="message"></textarea>
                    @if($errors->has('title')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
                </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary pull-right">Post conversation</button>
      </div>
      </form>

    </div>
  </div>
</div>
