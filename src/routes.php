<?php

Route::get('forum', ['as' => 'forum', 'uses' => 'Socieboy\Forum\Controllers\ForumController@index']);

Route::get('forum/conversation/create', ['as' => 'forum.conversation.create', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@create']);

Route::post('forum/conversation', ['as' => 'forum.conversation.store', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@store']);

Route::get('forum/conversation/{slug}', ['as' => 'forum.conversation.show', 'uses' => 'Socieboy\Forum\Controllers\ConversationController@show']);

Route::post('forum/conversation/{slug}/reply', ['as' => 'forum.conversation.reply.store', 'uses' => 'Socieboy\Forum\Controllers\RepliesController@store']);




