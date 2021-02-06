<?php

namespace Modules\Books\Entities;

use Modules\Books\Entities\Issuance;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    const MODEL_ID = 1;

    protected $guarded = [];

    public function bookGenre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function issuances()
    {
       return $this->hasMany(Issuance::class, 'book_id');
    }
}
