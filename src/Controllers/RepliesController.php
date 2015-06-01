<?php namespace Socieboy\Forum\Controllers;

use App\Http\Controllers\Controller;
use Socieboy\Forum\Entities\Replies\Reply;
use Socieboy\Forum\Requests\CreateReplyRequest;
use Socieboy\Forum\Jobs\PostReplyJob;

class RepliesController extends Controller{

    /**
     *
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a new conversation.
     *
     * @param CreateReplyRequest $request
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateReplyRequest $request, $slug)
    {
        $job = new PostReplyJob(new Reply(), $request->except('_token'));

        $job->handle();

        return redirect()->route('forum.conversation.show', $slug);
    }

} 