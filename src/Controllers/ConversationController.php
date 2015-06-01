<?php namespace Socieboy\Forum\Controllers;

use App\Http\Controllers\Controller;
use Socieboy\Forum\Entities\Conversations\Conversation;
use Socieboy\Forum\Jobs\StartConversationJob;
use Socieboy\Forum\Requests\ConversationRequest;


class ConversationController extends Controller{

    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a conversation and replies
     *
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $conversation = Conversation::where('slug', $slug)->get()->first();

        $replies = $conversation->replies()->paginate(10);

        return view('Forum::Conversations.show', compact('conversation', 'replies'));
    }

    /**
     * Create a new conversation
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Forum::create');
    }

    /**
     * Store the new conversation.
     *
     * @param ConversationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ConversationRequest $request)
    {
        $job = new StartConversationJob(
                new Conversation(),
                $request->except('_token')
        );

        $job->handle();

        return redirect()->route('forum');
    }

} 