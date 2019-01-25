<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'sort', 'text'];

    public function files()
    {
        return $this->morphMany('App\Models\Files', 'filetable');
    }
}
