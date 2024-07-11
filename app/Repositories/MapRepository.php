<?php

namespace App\Repositories;

use App\Models\Map;
use App\Repositories\Interfaces\MapRepositoryInterface;

class MapRepository implements MapRepositoryInterface
{
    public function createMap($mapData) {
        Map::create($mapData);
    }

    public function deleteMap($map) {
        $map->delete();
    }
}
