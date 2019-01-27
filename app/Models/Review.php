<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded  = ['file'];

    public function files()
    {
        return $this->morphMany('App\Models\Files', 'filetable');
    }
}
