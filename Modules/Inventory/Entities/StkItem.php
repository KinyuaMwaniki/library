<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkItem extends Model
{
    protected $fillable = [];
    protected $primaryKey = 'StockLink';
    protected $table = 'stkItem';
}
