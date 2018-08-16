<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class PhotoConverter 
{
    public function convert($image)
    {
        $data = $image;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $file = substr(md5(mt_rand()), 0, 20);
        Storage::disk('public')->put( $file . '.png', base64_decode($data));
        return $file . '.png';
    }
}
