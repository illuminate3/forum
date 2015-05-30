
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

                    @include('Forum::Conversations.partials.form')

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary pull-right">Post conversation</button>

                </div>

            </form>

        </div>
    </div>
</div>
