<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = "songs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'link', 'lyrics', 'status', 'genre_id', 'user_id', 'singer_id', 'album_id'
    ];

    /**
     * Song belong to genre.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }

     /**
     * Song belong to user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

     /**
     * Song belong to singer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function singer()
    {
        return $this->belongsTo('App\Singer', 'singer_id');
    }

     /**
     * Song belong to album.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id');
    }
}
