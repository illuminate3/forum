
<div class="container col-md-12">
<form action="{{ route('forum.conversation.reply.store', $conversation->slug) }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <input type="hidden" name="conversation_id" value="{{ $conversation->id }}"/>

    <div class="form-group @if($errors->has('message')) has-error @endif">
        <label for="message">Your reply:</label>
        <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
        @if($errors->has('message')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
    </div>


    <button type="submit" class="btn btn-primary pull-right">Post your reply</button>

</form>
</div>