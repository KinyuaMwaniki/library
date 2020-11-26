<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkCosting extends Model
{
    
    const MODULE_ID = 1;

    protected $fillable = [
        'code',
        'description',
    ];
    protected $table = 'stkCosting';
    protected $primaryKey = 'cost_id';
}
