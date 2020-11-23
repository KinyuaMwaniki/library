<?php

namespace Modules\Tax\Entities;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [
        'code',
        'description',
        'value',
        'active',
    ];
    protected $primaryKey = 'tax_id';
    protected $table = 'taxes';
}
