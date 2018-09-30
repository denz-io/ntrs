<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Photo 
{
    /**
     * @param Object $file: File being uploaded  
     * @param String $storage: specify disk storage being used. 
     *
     * @return string: name of the file.
     */
    public function upload($file)
    {
        $file_name = md5($file->getClientOriginalName() . microtime()) . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->put($file_name, file_get_contents($file));
        return $file_name;
    }
}
