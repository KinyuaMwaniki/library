<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkGroup extends Model
{
    
    const MODULE_ID = 1;

    protected $fillable = [
        'code',
        'sales_ledger_id',
        'purchase_ledger_id',
        'adjustment_ledger_id',
        'description',
    ];

    protected $table = 'stkGroup';
    protected $primaryKey = 'group_id';
}
