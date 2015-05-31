<?php namespace Socieboy\Forum\Jobs;

use Illuminate\Support\Facades\Auth;
use Socieboy\Forum\Entities\Replies\Reply;

class PostReplyJob {

    protected $reply;

    protected $data;

    function __construct(Reply $reply, Array $data)
    {
        $this->reply = $reply;
        $this->data = $data;
    }

    public function handle()
    {
        $this->reply->conversation_id = $this->data['conversation_id'];

        $this->reply->user_id = Auth::User()->id;

        $this->reply->fill($this->data);

        $this->reply->save();
    }
} 