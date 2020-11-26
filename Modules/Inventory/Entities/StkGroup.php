<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkGroup extends Model
{
    
    const MODEL_ID = 3;
    const NUMBERING_FORMAT_TEST = 'NUMBERING FORMAT TEST';
    const AUTOMATIC_NUMBERING_TEST = 'AUTOMATIC NUMBERING TEST';

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
