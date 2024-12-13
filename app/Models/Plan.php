<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOption\Option;

class Plan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(PlanLanguage::class);
    }

    public function options()
    {
        return $this->hasMany(PlanOption::class);
    }

    public function optionTranslations()
    {
        return $this->hasMany(PlanOptionLanguage::class);
    }

    public function getTranslation($field)
    {
        $lang = app()->getLocale();
        $page_translation = $this->hasMany(PlanLanguage::class)->where('lang', $lang)->first();

        if (blank($page_translation)):
            $page_translation = $this->hasMany(PlanLanguage::class)->where('lang', 'en')->first();
        endif;

        return $page_translation?->$field;
    }
}
