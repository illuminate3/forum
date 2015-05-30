<?php namespace Socieboy\Forum\Controllers;

use \App\Http\Controllers\Controller;
use Socieboy\Forum\Entities\Conversations\Conversation;

class ForumController extends Controller{


    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the main page of the forum.
     * All conversations are listed.
     *
     * @param Conversation $conversation
     * @return \Illuminate\View\View
     */
    public function index(Conversation $conversation)
    {
        $conversations = $conversation->latest()->paginate(15);
        return view('Forum::index', compact('conversations'));
    }



} 