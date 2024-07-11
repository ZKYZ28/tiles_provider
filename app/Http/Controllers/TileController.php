<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class TileController extends Controller
{
    public function getTile($map,$zoom, $x, $y)
    {
        $tilePath = public_path("storage/maps/{$map}/{$zoom}/{$x}/{$y}.png");

        if (File::exists($tilePath)) {
            return response()->file($tilePath);
        } else {
            abort(404);
        }
    }
}
