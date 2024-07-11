{{--MONDAL--}}
<div id="success-modal" class="hidden w-7/12 lg:w-5/12 fixed top-1/2 -translate-y-1/2 main-background-color p-6 rounded-lg shadow-lg w-1/2 z-50 flex flex-col items-center">
    <button id="close-success-modal" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close modal</span>
    </button>

    <img src="{{ asset('imgs/validation.png') }}"
         class="phone-img  w-32 h-auto center object-cover" alt="Image">

    <h3 class="font-semibold text-3xl montserrat-font mt-4">Map successfully created !</h3>
    <p class="text-gray-400 text-xl mt-2 w-3/4 text-center">It is now available via the following link :<br/> <span id="link-map" class="font-semibold second-color"></span><br/>Which you can find in the side menu. </p>
</div>
<?php
