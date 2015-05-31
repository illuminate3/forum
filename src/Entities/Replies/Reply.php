<?php namespace Socieboy\Forum\Entities\Replies;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model{

    /**
     * @var string
     */
    protected $table = 'replies';

    /**
     * @var array
     */
    protected $fillable = ['message'];

    /**
     * Return the conversation parent of this reply.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function conversation()
    {
        return $this->belongsTo('Socieboy\Forum\Entities\Conversations\Conversation');
    }

    /**
     * Return the user owner of this reply.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('forum.user.model'));
    }

    public function hey()
    {
        dd(123);
    }
} 