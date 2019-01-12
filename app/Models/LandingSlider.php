<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingSlider extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'sort',  'description'];

    protected $dates = ['deleted_at'];
}
