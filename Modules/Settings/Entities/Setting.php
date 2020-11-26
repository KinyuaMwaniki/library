<?php

namespace Modules\Settings\Entities;

use Modules\Settings\Entities\Module;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [];


    public function model()
    {
        return $this->belongsTo(Module::class, 'model_id');
    }

    public static function getValue($name)
    {
        $setting = Setting::where('policy', $name)->first();

        return $setting ? $setting->value : null;
    }
}
