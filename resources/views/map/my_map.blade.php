@extends('app')
@section('my_maps', 'My maps')
@section('content')

    <div class="flex">
        @include('components.side_menu')

        <div class="w-10/12 flex justify-center min-content-page-height relative" style="">
            <div id="map-render" class="w-full h-full"></div>
        </div>
    </div>
    <script>
        var mapName = {!! json_encode($map->code) !!};
        var maxZoomLevel = {!! json_encode($map->zoo_level) !!};
    </script>
    @push('scripts')
        @vite('resources/js/map/my_map.js')
    @endpush
@endsection
