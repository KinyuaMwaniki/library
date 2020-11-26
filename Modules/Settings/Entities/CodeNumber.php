<?php

namespace Modules\Settings\Entities;

use Modules\Settings\Entities\Module;
use Illuminate\Database\Eloquent\Model;

class CodeNumber extends Model
{
    protected $fillable = [
        'model_id',
        'code_length',
        'alpha_length',
    ];

    public function model()
    {
        return $this->belongsTo(Module::class, 'model_id');
    }
}
