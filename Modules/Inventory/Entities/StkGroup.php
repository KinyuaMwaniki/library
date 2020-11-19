<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkGroup extends Model
{
    protected $fillable = [];
    protected $table = 'stkGroup';
    protected $primaryKey = 'group_id';
}
