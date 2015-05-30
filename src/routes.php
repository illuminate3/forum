<?php

Route::get('forum', ['as' => 'forum', 'uses' => 'Socieboy\Forum\Controllers\ForumController@index']);

Route::get('forum/conversation/create', ['as' => 'forum.conversation.create', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@create']);

Route::post('forum/conversation', ['as' => 'forum.conversation.store', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@store']);

Route::get('forum/{id}', ['as' => 'forum.conversation.show', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@show']);

Route::get('forum/conversation/reply', ['as' => 'forum.conversations.reply.create', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@store']);




