<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
