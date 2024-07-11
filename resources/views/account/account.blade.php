@extends('app')
@section('create', 'Create Map')
@section('content')
    <div class="flex">
        @include('components.side_menu')

        <div class="w-10/12 flex justify-center min-content-page-height relative p-8">
            <div class="flex w-3/4 border  rounded p-8">
                <div class="w-3/12 flex flex-col items-center relative">
                    <img src="{{asset('imgs/map.jpg')}}" class="rounded-full max-w-[80%] h-auto">
                    <div class="mt-6 rounded w-1/2 text-center p-2 border shadow">
                        @if(auth()->user()->completedPayment)
                            <span class="px-4 py-2 text-xl  flex items-center text-yellow-500">Premium <img src="{{asset('imgs/crown.png')}}" class="w-8 ml-2"></span>
                        @else
                            <span class="px-4 py-4 text-xl font-semibold">Basic</span>
                        @endif
                    </div>

                    <button type="submit" class="absolute bottom-0 left-0 text-center text-red-400 border-red-400 border text-white p-2.5 rounded-lg">Delete my account</button>
                </div>

                <div class="w-9/12 pl-28">
                    <form action="{{ route('login.submit') }}" method="POST"
                          class="flex flex-col w-full h-full text-center bg-white rounded-3xl relative">
                        @csrf

                        <div class="flex justify-between mb-8">
                            <div class="w-[45%] mb-2 text-left">
                                <label for="name" class="label-form">Name @include('components.required')</label>
                                <input id="name" name="name" type="name"
                                       class="input-form"
                                       value="{{old('name')}} {{auth()->user()->name}}" required/>
                                @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-[45%] mb-2 text-left">
                                <label for="email" class="label-form">Email @include('components.required')</label>
                                <input id="email" name="email" type="email" placeholder="exemple@domolie.com"
                                       class="input-form"
                                       value="{{old('email')}} {{auth()->user()->email}}" required/>
                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-2 text-left mb-8">
                            <label for="password" class="label-form">Current password @include('components.required')</label>
                            <div class="relative">
                                <input id="password" name="password" type="password"
                                       placeholder="Entrez votre mot de passe" class="input-form"
                                       value="{{old('password')}}" required/>
                                <button type="button" id="togglePassword" class="absolute top-4 right-10"><i
                                        class="fa-solid fa-eye text-sm text-gray-600"></i></button>
                            </div>

                            @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-between mb-8">
                            <div class="w-[45%] mb-2 text-left">
                                <label for="newPassword" class="label-form">New password @include('components.required')</label>
                                <input id="newPassword" name="newPassword" type="password"
                                       class="input-form"
                                       value="{{old('newPassword')}}" required/>
                                @error('newPassword')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-[45%] mb-2 text-left">
                                <label for="newPasswordConfirm" class="label-form">Confirm new Password @include('components.required')</label>
                                <input id="newPasswordConfirm" name="newPasswordConfirm" type="password"
                                       class="input-form"
                                       value="{{old('email')}}" required/>
                                @error('newPasswordConfirm')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="newPasswordConfirm" class="label-form">Secret key</label>
                        <div class="w-full rounded border-b p-2 blur text-left">
                            q85q9UJkB6xp7YSAj87gu755VKQgJh68dUAn6B8y
                        </div>

                        <button type="submit" class="absolute bottom-0 right-0 w-28 text-center text-xl font-bold second-background-color text-white p-2.5 rounded">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
