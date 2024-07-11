@extends('app')
@section('create', 'Create Map')
@section('content')
    <div class="flex">
        @include('components.side_menu')

        <div class="w-10/12 flex justify-center min-content-page-height relative" style="">

            <form action="{{route('submit.create_map')}}" method="POST" enctype="multipart/form-data" class="flex justify-center p-8">
                @csrf

                <div class="w-10/12 flex flex-col p-4">
                    <div class="flex flex-col">
                        <div class="flex items-center">
                            <div class="rounded-full flex justify-center items-center bg-white p-2 border-2 mr-4">
                                <i class="fa-solid fa-tag text-gray-400"></i>
                            </div>
                            <div>
                                <span class="text-gray-500 font-semibold text-lg">Name</span>
                                <p class="text-sm text-gray-500 mt-2">Enter the name of your card. This will help you find your way around if you have several cards.</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input id="name" name="name" type="text" placeholder="Your name here" class="input-form"
                                   value="{{ old('name')}}" required/>
                            @error('name')
                            <span class="text-red-500 font-semibold italic mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <!--IMAGE-->
                        <div class="flex items-center mt-14">
                            <div class="rounded-full flex justify-center items-center bg-white p-2 border-2 mr-4">
                                <i class="fa-solid fa-image text-gray-400"></i>
                            </div>
                            <div>
                                <span class="text-gray-500 font-semibold text-lg">Image</span>
                                <p class="text-sm text-gray-500 mt-2">Select the image you wish to transform into a map</p>
                            </div>
                        </div>

                        <div class="flex flex-col relative mt-4">
                            <img id="offer-image" class="hidden max-h-96 w-auto">

                            <div id="upload-file" class="w-full h-full">
                                <label for="image_path" class="flex flex-col justify-center items-center bg-white rounded-lg border-2 border-dashed border-gray-300 cursor-pointer h-full py-1 mx-2">
                                    <div class="flex flex-col justify-center items-center">
                                        <i class="fa-solid fa-cloud-arrow-up text-green-700"></i>
                                        <p class="mb-1 text-sm text-gray-500 text-center">
                                            <span class="text-gray-700 font-semibold">Cliquer pour ajouter une image</span>
                                        </p>
                                        <p class="text-xs text-gray-500">Format autorisé : JPG, JPEG OU PNG</p>
                                    </div>
                                </label>
                                <input id="image_path" name="image_path" type="file" class="hidden" accept=".jpg, .png, .jpeg" value="{{ old('image_path') }}"/>
                                <p id="image_path_error" class="text-red-500"></p>
                            </div>
                        </div>

                        <!--ZOOM-->
                        <div class="flex flex-col relative mt-14">
                            <div class="flex items-center">
                                <div class="rounded-full flex justify-center items-center bg-white p-2 border-2 mr-4">
                                    <i class="fa-solid fa-magnifying-glass-location text-gray-400"></i>
                                </div>
                                <div>
                                    <span class="text-gray-500 font-semibold text-lg">Zoom</span>
                                    <p class="text-sm text-gray-500 mt-2">Defines the maximum zoom level your map can reach</p>
                                </div>

                            </div>


                            <div id="image-container" class="flex flex-wrap mt-4">
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/0.png')}}" alt="ZOOM 0" data-index="0">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">1</div>
                                </div>
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/1.png')}}" alt="ZOOM 1" data-index="1">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">2</div>
                                </div>
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/2.png')}}" alt="ZOOM 2" data-index="2">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">3</div>
                                </div>
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/3.png')}}" alt="ZOOM 3" data-index="3">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">4</div>
                                </div>
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/4.png')}}" alt="ZOOM 4" data-index="4">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">5</div>
                                </div>
                                <div class="flex flex-col items-center w-[16%] m-1">
                                    <img class="image-item w-full" src="{{asset('imgs/zoom_levels/4.png')}}" alt="ZOOM 5" data-index="5">
                                    <div class="w-1 h-8 second-background-color"></div>
                                    <div class="rounded-full second-background-color w-10 h-10 flex justify-center items-center text-white font-bold text-xl">6</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <input type="hidden" name="selected_image_index" id="selected_image_index" value="">

                    <div class="flex justify-center mt-8">
                        <button id="submit-form-btn" class="w-28 text-center text-xl text-white font-bold second-background-color rounded p-2.5">Save</button>
                    </div>
                </div>
            </form>

            @include('map.success_modal')
        </div>
    </div>

    @push('scripts')
        @vite('resources/js/map/create.js')
    @endpush
@endsection
