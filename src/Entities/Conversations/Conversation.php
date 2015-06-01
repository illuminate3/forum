<?php namespace Socieboy\Forum\Entities\Conversations;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model{

    /**
     * @var string
     */
    protected $table = 'conversations';

    /**
     * @var array
     */
    protected $fillable = ['title', 'message', 'topic_id', 'slug'];

    /**
     * Return the user owner of this conversation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('forum.user.model'));
    }

    /**
     * Return replies on this conversation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany('Socieboy\Forum\Entities\Replies\Reply')->latest();
    }

    public function getTopicAttribute()
    {
        return config('forum.topics.'.$this->topic_id);
    }
} 