<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'release_date', 'artist_id'];

    // Альбом принадлежит определенному артисту
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // У альбома может быть много треков
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
