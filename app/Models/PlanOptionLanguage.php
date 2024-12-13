<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanOptionLanguage extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    /**
     * Summary of option
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo(\app\Models\PlanOption::class);
    }
}
