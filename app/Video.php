<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'link', 'status', 'genre_id', 'user_id', 'singer_id', 'topic_id'
    ];

    /**
     * Video belong to genre.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }

    /**
     * Video belong to user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Video belong to singer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function singer()
    {
        return $this->belongsTo('App\Singer', 'singer_id');
    }

    /**
     * Video belong to topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Topic', 'topic_id');
    }
}
