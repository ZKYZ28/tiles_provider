<?php

namespace App\Utils;

use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class ImageManager
{
    public static function uploadImage($request, $path)
    {

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            return $image->store($path, 'public');
        }

        return null;
    }



    public static function deleteMedia($path) {
        $storagePath = storage_path('app/public/' . $path);
        if (file_exists($storagePath)) {
            if(unlink($storagePath)){
                return true;
            }
        } else {
            return false;
        }
    }
}
