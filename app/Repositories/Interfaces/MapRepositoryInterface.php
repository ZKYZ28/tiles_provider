<?php

namespace App\Repositories\Interfaces;

interface MapRepositoryInterface
{
    public function createMap($mapData);

    public function deleteMap($map);
}
