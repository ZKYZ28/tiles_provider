@extends('app')
@section('content')

    <div class="flex h-screen w-full">
        <div class="w-0 lg:w-4/12 h-screen custom-scroll-bar bg-green-50 flex flex-col justify-center items-center">
            <img class="w-48 md:w-3/4 mb-6" src="{{ asset('imgs/HEC_LOGO.png') }}" alt="HEC LOGO">
            <div class="border-b-2 w-1/3 mb-14"></div>
            <img class="w-48 md:w-8/12 mb-10" src="{{ asset('imgs/logo_simple.png') }}" alt="HEC LOGO">
        </div>

        <div class="w-full lg:w-7/12 px-6 lg:px-0 h-screen flex flex-col justify-center items-center">
            <div>
                <h3 class="text-3xl font-bold">Réinitialiser votre mot de passe</h3>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu fringilla odio. Maecenas sollicitudin, dolor quis consequat porta.
                </p>

                <form method="POST" action="{{route('reset-password.submit')}}">
                    @csrf

                    <input type="hidden" name="encryptedEmail" value="{{ $email }}" placeholder="Votre e-mail" required />

                    <div class="mb-5">
                        <label for="new-password" class="label-form">Nouveau mot de passe @include('components.required')</label>
                        <div class="relative">
                            <input type="password" id="password" name="new-password" class="input-form"  required />
                            <button type="button" id="togglePassword" class="absolute top-4 right-10"><i class="fa-solid fa-eye text-sm text-gray-600"></i></button>
                        </div>
                        @error('new-password')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="new-password" class="label-form">Confirmer nouveau mot de passe @include('components.required')</label>
                        <div class="relative">
                            <input type="password" id="confirmPassword" name="confirm-new-password" class="input-form" required />
                            <button type="button" id="toggleConfirmPassword" class="absolute top-4 right-10"><i class="fa-solid fa-eye text-sm text-gray-600"></i></button>
                        </div>
                        @error('confirm-new-password')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center mt-8">
                        <button type="submit" class="bg-green-700 p-2.5 text-white font-semibold">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        @vite('resources/js/auth/auth.js')
    @endpush
@endsection

