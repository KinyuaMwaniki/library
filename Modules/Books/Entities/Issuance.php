<?php

namespace Modules\Books\Entities;

use Carbon\Carbon;
use Modules\Books\Entities\Book;
use Modules\Students\Entities\Student;
use Illuminate\Database\Eloquent\Model;

class Issuance extends Model
{
    const MODEL_ID = 2;
    const DEFAULT_ISSUE_DAYS = 'DEFAULT ISSUE DAYS';
    const MAXIMUM_ISSUES_PER_STUDENT = 'MAXIMUM ISSUES PER STUDENT';
    // const PRINT_ISSUE_CARD = 'PRINT ISSUE CARD';

    protected $guarded = [];

    protected $dates = [
        'date_issued',
        'date_expected',
        'date_returned'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function getStatusAttribute()
    {
        if(Carbon::now()->copy()->startOfDay() > $this->date_expected && is_null($this->date_returned)) {
            return 2;
        } else if (Carbon::now()->copy()->startOfDay() <= $this->date_expected && is_null($this->date_returned)) {
            return 1;
        }
        return 0;
    }
}
