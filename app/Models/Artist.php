<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'genre'];

    // У артиста может быть много альбомов
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
