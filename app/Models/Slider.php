<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ["id"];

    public function translations()
    {
        return $this->hasMany(SliderLanguage::class);
    }

    public function getTranslation($field)
    {
        $lang = app()->getLocale();
        $slider_translation = $this->hasMany(SliderLanguage::class)->where('lang', $lang)->first();

        if (blank($slider_translation)):
            $slider_translation = $this->hasMany(SliderLanguage::class)->where('lang', 'en')->first();
        endif;

        return $slider_translation?->$field;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->useDisk('public');
    }
}
