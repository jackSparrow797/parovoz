<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['title', 'answer', 'task', 'site', 'sort', 'section_id'];

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function files()
    {
        return $this->morphMany('App\Models\Files', 'filetable');
    }
}
