@extends('app')
@section('login', 'Login')
@section('content')
    <div class="mt-4 lg:mt-0 relative overflow-hidden">
        <div class="flex  justify-center w-full min-content-page-height">

            <div class="flex flex-col items-start xl:p-10">
                <h3 class="mb-3 text-5xl font-bold text-gray-700 montserrat-font">Welcome to <br/><span class="second-color">SAAMAP</span></h3>
                @include('components.success_error')
                @include('auth.forgot_password_modal')


                <form action="{{ route('register.submit') }}" method="POST" class="mt-10 flex flex-col w-full h-full pb-6 text-center bg-white rounded-3xl">
                    @csrf

                    <input type="hidden" value="1" name="role_id" id="role_id">

                    <div class="mb-4 text-left">
                        <label for="email" class="label-form">Email @include('components.required')</label>
                        <input id="email" name="email" type="email" placeholder="exemple@domolie.com" class="input-form" value="{{old('email')}}" required/>
                        @error('email')
                        <span class="text-red-500 italic text-sm font-semibold">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-4 text-left">
                        <label for="password" class="label-form">Mot de passe @include('components.required')</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" placeholder="Entrez votre mot de passe"
                                   class="input-form"
                                   value="{{old('password')}}" required/>
                            <button type="button" id="togglePassword" class="absolute top-4 right-10"><i class="fa-solid fa-eye text-sm text-gray-600"></i></button>
                        </div>

                        @error('password')
                        <span class="text-red-500 italic text-sm font-semibold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-6 text-left">
                        <label for="confirmPassword" class="label-form">Confirmation du mot de passe @include('components.required')</label>
                        <div class="relative">
                            <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirmez votre mot de passe"
                                   class="input-form"
                                   value="{{old('confirmPassword')}}" required/>
                            <button type="button" id="toggleConfirmPassword" class="absolute top-4 right-10"><i class="fa-solid fa-eye text-sm text-gray-600"></i></button>
                        </div>
                        @error('confirmPassword')
                        <span class="text-red-500 italic text-sm font-semibold">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit"
                            class="w-full py-4 mb-5 text-xl font-bold leading-none text-white md:w-96 rounded second-background-color">
                        Register
                    </button>

                    <p class="text-sm leading-relaxed text-left text-grey-900 z-50">Already have an account ? <a
                            href="{{ route('login')}}" class="font-bold second-color mr-4">Login</a></p>
                </form>

            </div>
        </div>

        <img src="{{ asset('imgs/cloud.png') }}"
             class="top-[40%] left-10 -rotate-[30deg] absolute bottom-0" alt="Image">

        <img src="{{ asset('imgs/cloud.png') }}"
             class="top-[40%] right-10 rotate-[30deg] absolute bottom-0" alt="Image">

        <img src="{{ asset('imgs/earth.png') }}"
             class="w-full top-[70%] absolute bottom-0 filter brightness-75 spin-clockwise z-0" alt="Image">
    </div>

    @push('scripts')
        @vite('resources/js/auth/auth.js')
    @endpush
@endsection
