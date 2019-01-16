<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['title', 'text', 'section_id'];

    public function files()
    {
        return $this->morphMany('App\Models\Files', 'filetable');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }


}
