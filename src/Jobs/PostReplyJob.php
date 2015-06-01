<?php namespace Socieboy\Forum\Jobs;

use Illuminate\Support\Facades\Auth;
use League\CommonMark\CommonMarkConverter;
use Socieboy\Forum\Entities\Replies\Reply;

class PostReplyJob {

    protected $reply;

    protected $data;

    protected $converter;

    function __construct(Reply $reply, Array $data)
    {
        $this->reply = $reply;

        $this->data = $data;

        $this->converter = new CommonMarkConverter();
    }

    public function handle()
    {
        $this->reply->conversation_id = $this->data['conversation_id'];

        $this->reply->user_id = Auth::User()->id;

        $this->data['message'] = $this->converter->convertToHtml($this->data['message']);

        $this->reply->fill($this->data);

        $this->reply->save();
    }
} 