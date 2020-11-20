<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkCosting extends Model
{
    protected $fillable = [
        'code',
        'description',
    ];
    protected $table = 'stkCosting';
    protected $primaryKey = 'cost_id';
}
