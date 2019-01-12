<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable = [ 'filetable_id', 'filetable_type', 'path'];
    public function filetable()
    {
        return $this->morphTo();
    }
}
