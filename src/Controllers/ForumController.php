<?php namespace Socieboy\Forum\Controllers;

use \App\Http\Controllers\Controller;

class ForumController extends Controller{

    function __construct()
    {
    }

    public function index()
    {
        return view('Forum::index');
    }

} 