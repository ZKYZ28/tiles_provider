@extends('app')
@section('my_maps', 'My maps')
@section('content')

    <div class="flex">
        @include('components.side_menu')

        <div class="w-10/12 flex justify-center min-content-page-height relative" style="">

            <div class="mx-auto p-4 w-full">
                <div class="px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach(auth()->user()->maps as $map)
                        <div class="relative">
                            <a href="{{ route('show.map', $map) }}" class="h-72 relative z-0">
                                <div class="relative h-full">
                                    <img src="{{ asset('storage/' .$map->path) }}"
                                         class="w-full h-full center object-cover rounded-xl max-h-72"
                                         alt="{{ $map->path }}">
                                    <div class="absolute inset-0 bg-black opacity-25 rounded-xl"></div>
                                    <div class="absolute bottom-6 left-6 flex items-center">
                                        <h4 class=" text-3xl font-bold text-white montserrat-font uppercase mr-4">{{ $map->name }}</h4>
                                        <button
                                            class="rounded-full w-7 h-7 flex justify-center items-center second-background-color link-button" data-value="{{$map->code}}/{z}/{y}/{x}">
                                            <i class="fa-solid fa-link text-white font-bold"></i></button>
                                </div>
                                </div>
                            </a>

                            <form method="POST" action="{{ route('submit.delete_map', $map->id) }}"
                                  class="z-50 absolute -top-2 -right-2 rounded-full w-8 h-8 flex justify-center items-center bg-red-600 border-4 border-white">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="delete-button-{{ $map->id }}"><i
                                        class="fa-solid fa-minus text-white text-xl font-bold rotate-12"></i></button>
                            </form>
                        </div>
                    @endforeach

                    <!---ADD NEW MAP --->
                        @if(auth()->user()->completedPayment || (!auth()->user()->completedPayment && count(auth()->user()->maps) == 0))
                            <div class="relative h-72 border-2 border-dashed rounded-xl">
                                <a href="{{ route('show.create_map') }}" class="h-full w-full flex justify-center items-center relative z-0 ">
                                    <img src="{{ asset('imgs/add.png') }}"
                                         class="w-auto h-1/2 center object-fit rounded-xl"
                                         alt="Add mapp Image">
                                </a>
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        @vite('resources/js/map/my_maps.js')
    @endpush
@endsection
