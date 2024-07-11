<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Repositories\Interfaces\MapRepositoryInterface;
use App\Utils\ImageManager;
use App\Utils\PythonExecutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mockery\Exception;

class MapController extends Controller
{
    private MapRepositoryInterface $mapRepository;

    public function __construct(MapRepositoryInterface $mapRepository)
    {
        $this->mapRepository = $mapRepository;
    }

    public function showCreateMap() {
        if(auth()->user()->completedPayment || (!auth()->user()->completedPayment && count(auth()->user()->maps) == 0)) {
            return view ('map.create');
        }else{
            return view ('error.error', ['title' => '403', 'message' => 'You are not authorised to access this resource']);
        }
    }

    public function showMyMaps() {
        return view ('map.my_maps');
    }

    public function showMap(Map $map) {
        return view ('map.my_map' , ['map' => $map]);
    }


    public function createMap(Request $request) {
        $zoomLevel = $request->input('selected_image_index');
        $randomString = Str::random(16);
        $filename = 'maps/' . $randomString;

        $image_path = ImageManager::uploadImage($request, $filename);

        $mapData = [
            'name' => $request->input('name'),
            'path' => $image_path,
            'user_id' => Auth::id(),
            'zoo_level' => $zoomLevel,
            'code' => $randomString,
        ];


        if ($image_path) {
            $inputImagePath = Storage::path('public\\' . $image_path);
            $inputImagePath = str_replace('/', '\\', $inputImagePath);

            $outputDir = storage_path('app\public\maps\\' . $randomString);;

            try {
                $output = PythonExecutor::createMap($inputImagePath, $outputDir, $zoomLevel);
                $this->mapRepository->createMap($mapData);

                return redirect()->route('show.my_maps');
            } catch (\Exception $e) {
                return response()->json(['message' => 'Error executing the script', 'error' => $e->getMessage()], 500);
            }
        }

        return redirect()->back();
    }

    public function deleteMap(Map $map) {
        try {
            $this->mapRepository->deleteMap($map);
            return redirect()->back();
        }catch (Exception $e) {
            dd($e);
        }
    }
}
