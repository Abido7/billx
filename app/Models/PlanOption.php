<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanOption extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function optionTranslations()
    {
        return $this->hasMany(PlanOptionLanguage::class);
    }
    public function getTranslation($field)
    {
        $lang = app()->getLocale();
        $page_translation = $this->hasMany(PlanOptionLanguage::class)->where('lang', $lang)->first();

        if (blank($page_translation)):
            $page_translation = $this->hasMany(PlanOptionLanguage::class)->where('lang', 'en')->first();
        endif;

        return $page_translation?->$field;
    }
}
