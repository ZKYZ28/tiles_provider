@extends('app')
@section('success', 'Payment success')
@section('content')

    <div class="flex min-content-page-height flex-col justify-center items-center">
        <div class="w-1/3 shadow-lg border rounded flex flex-col items-center justify-center p-8">
            <img src="{{asset('imgs/validation.png')}}" alt="SUCCESS IMG" class="w-28 h-auto">

            <h1 class="text-2xl font-bold montserrat-font my-4">Payment Successful</h1>
            <p class="text-xl text-gray-400 w-9/12 text-center">Your Premium subscription has been activated. You can now access all the features of SAAMAP.</p>

            <a href="{{route('show.my_maps')}}" class="w-28 text-center text-xl font-bold second-background-color text-white p-1 rounded mt-6">
                Go
            </a>
        </div>
    </div>
@endsection
