<?php

namespace Modules\Settings\Entities;

use Carbon\Carbon;
use Modules\Books\Entities\Issuance;
use Modules\Settings\Entities\Module;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'value'
    ];

    protected $appends = ['date_expected'];

    
    
    public function model()
    {
        return $this->belongsTo(Module::class, 'model_id');
    }
    
    public static function getValue($name)
    {
        $setting = Setting::where('policy', $name)->first();
        
        return $setting ? $setting->value : null;
    }

    public function getDateExpectedAttribute()
    {
        return Carbon::today()->copy()->addDays($this->getValue(Issuance::DEFAULT_ISSUE_DAYS))->format('Y-m-d');
    }
}
