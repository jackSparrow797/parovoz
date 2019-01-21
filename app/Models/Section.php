<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = ['title', 'page_id'];

    public function offer()
    {
        return $this->hasMany(Offer::class);
    }

    public function work()
    {
        return $this->hasMany(Work::class);
    }

    public function page()
    {
        return $this->belongsTo(page::class);
    }
}
