<?php namespace Socieboy\Forum\Controllers;

use App\Http\Controllers\Controller;
use Socieboy\Forum\Entities\Conversations\Conversation;
use Socieboy\Forum\Requests\ConversationRequest;
use Illuminate\Auth\Guard;

class ConversationController extends Controller{

    protected $user;

    function __construct(Guard $auth)
    {
        $this->middleware('auth');
        $this->user = $auth->user();
    }

    /**
     * Display a conversation and replies
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $conversation = Conversation::findOrFail($id);
        return view('Forum::Conversations.show', compact('conversation'));
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
        $conversation = new Conversation();
        $conversation->user_id = $this->user->id;
        $conversation->fill($request->only(['title', 'message', 'topic_id']));
        $conversation->save();
        return redirect()->route('forum');
    }

} 