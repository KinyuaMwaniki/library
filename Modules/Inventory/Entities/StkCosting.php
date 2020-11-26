<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkCosting extends Model
{
    
    const MODEL_ID = 2;

    protected $fillable = [
        'code',
        'description',
    ];
    protected $table = 'stkCosting';
    protected $primaryKey = 'cost_id';
}
