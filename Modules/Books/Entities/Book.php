<?php

namespace Modules\Books\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function bookGenre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
