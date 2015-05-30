<?php namespace Socieboy\Forum\Entities\Conversations;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model{

    protected $table = 'conversations';

    protected $fillable = ['title', 'message', 'topic_id'];

    public function user()
    {
        return $this->belongsTo(config('forum.user.model'));
    }
} 