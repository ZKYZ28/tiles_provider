@extends('app')
@section('home', 'Home')
@section('content')
    <div class="flex min-content-page-height relative overflow-hidden">

        <div class="hidden md:block absolute -top-20 -right-52 overflow-hidden w-[50vw] h-[100vh]">
            <img src="{{ asset('imgs/map.jpg') }}" class="w-full h-full center object-cover rounded-full" alt="Image">
        </div>

        <div id="home-content" class="w-full md:w-1/2 flex flex-col px-8 md:pl-28 justify-center">
            <div class="flex flex-col font-extrabold text-5xl md:text-8xl text-gray-800 montserrat-font">
                <span>Your</span>
                <span class="my-4"><span class="second-background-color text-white">world</span> in your <br
                        class="mb-4"/></span>
                <span>application</span>
            </div>

            <p class="text-gray-500 mb-16 md:mb-24 mt-8 md:mt-12">Lorem ipsum dolor sit amet, consectetur adipiscing <br/> elit. Vivamus
                et congue nisi,</p>

            <a href="{{route('show.create_map')}}"
               class="w-28 text-center text-xl font-bold second-background-color text-white p-2.5 rounded">Create</a>
        </div>

        <div class="w-0 md:w-1/2 relative">
            <img src="{{ asset('imgs/phone_hand.png') }}"
                 class="phone-img absolute -bottom-10 left-0 w-[25vw] h-auto center object-cover" alt="Image">
        </div>
    </div>

    @include('home.description')
    @include('home.pricing')
    @include('home.services')

    @push('scripts')
        @vite('resources/js/home/home.js')
    @endpush
@endsection
