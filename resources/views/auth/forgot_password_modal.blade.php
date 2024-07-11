{{--MONDAL--}}
<div id="forgot-password-modal" class="w-10/12 lg:w-7/12 fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden second-background-color p-6 rounded-lg shadow-lg w-1/2 z-50">
    <button id="close-forgot-password-modal" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close modal</span>
    </button>

    <h3 class="text-3xl font-semibold mt-8 mb-2">Réinitialiser votre mot de passe</h3>
    <p class="text-gray-500">Entrez l'addresse email associée à votre compte et nous vous enverrrons un email
        avec les instructions pour réinitlialiser votre mot de passe. </p>


    <form action="" method="POST" class="mt-8">
        @csrf

        <div class="mb-5">
            <label for="email" class="label-form">Adresse email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="input-form" placeholder="exemple@exemple.com" required />
            @error('email')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-center mt-8">
            <button type="submit" class="bg-green-700 p-2.5 text-white font-semibold">Envoyer</button>
        </div>
    </form>

</div>
