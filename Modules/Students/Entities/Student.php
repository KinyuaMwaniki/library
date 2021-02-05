<?php

namespace Modules\Students\Entities;

use Modules\Books\Entities\Issuance;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    protected $appends = ['full_name', 'unreturned_books'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }

    public function getUnreturnedBooksAttribute()
    {
       return $this->hasMany(Issuance::class, 'student_id')->whereNull('date_returned')->count();
    }
}
