<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Files extends Model
{
    protected $fillable = ['filetable_id', 'filetable_type', 'path', 'sort'];

    public function filetable()
    {
        return $this->morphTo();
    }

    public static function saveFiles($files, $savepath)
    {
        $files_out = [];
        foreach ($files as $file) {
            $path = $file->store($savepath, 'public');
            $files_out[] = new Files(['path' => $path]);
        }
        return $files_out;
    }

    public static function delFiles($files)
    {
        $path = [];
        foreach ($files as $file) {
            $path[] = $file->path;
        }
        $del = Storage::disk('public')->delete($path);
    }
}
