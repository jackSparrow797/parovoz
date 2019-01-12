<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingSlider extends Model
{

    protected $fillable = ['title', 'sort',  'description'];


    public function files()
    {
        return $this->morphMany('App\Models\Files', 'filetable');
    }
}
