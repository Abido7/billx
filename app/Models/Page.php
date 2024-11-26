<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(PageLanguage::class);
    }

    public function getTranslation($field)
    {
        $lang = app()->getLocale();
        $page_translation = $this->hasMany(PageLanguage::class)->where('lang', $lang)->first();

        if (blank($page_translation)):
            $page_translation = $this->hasMany(PageLanguage::class)->where('lang', 'en')->first();
        endif;

        return $page_translation?->$field;
    }


    public function scopeTitle($query, $title)
    {
        return $query->where('title', '=', $title)->first();
    }
}
