@extends('app')
@section('error', 'Error')
@section('content')-
    <div class="flex min-content-page-height justify-center items-center relative overflow-hidden">
        <section class="shadow-lg border rounded p-8">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600">{{$title}}</h1>
                    <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl"></p>
                    <p class="mb-4 text-lg font-light text-gray-500">{{$message}}</p>
                    <a href="{{route('home')}}" class="inline-flex text-white second-background-color font-bold rounded px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back to Homepage</a>
                </div>
            </div>
        </section>
    </div>
@endsection
