<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model
{
    use HasFactory, InteractsWithMedia;

    public function translations()
    {
        return $this->hasMany(SliderLanguage::class);
    }
}
