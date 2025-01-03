<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanLanguage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
