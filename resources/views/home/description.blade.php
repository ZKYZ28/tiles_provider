<div class="main-background-color h-40 flex justify-center">
    <div class="swiper mySwiper w-[40%] h-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><i class="fa-brands fa-google"></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-amazon "></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-facebook-f"></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-steam-symbol"></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-instagram "></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-airbnb "></i></div>
            <div class="swiper-slide"><i class="fa-brands fa-sketch "></i></div>
        </div>
    </div>
</div>


<div class="flex w-full relative min-h-[70vh] mb-20">
    <div class="w-0 md:w-3/12 main-background-color">
        <img id="computer-img" src="{{ asset('imgs/computer.png') }}"
             class="hidden md:block absolute bottom-0 left-10 w-[45vw] h-auto center object-cover" alt="Image">
    </div>

    <div class="w-full md:w-9/12 flex justify-end items-center  md:pr-20 pt-20">
        <div class="w-full md:w-7/12 px-8">
            <div class="flex flex-col">
                <hr class="border border-b-4 w-12 mb-2">
                <h3 class="montserrat-font text-3xl md:text-5xl">Services</h3>
            </div>

            <p class="text-gray-500 text-lg md:text-xl font-semibold mt-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et eros eu justo porta semper. Aliquam molestie odio felis. Pellentesque in tellus ac augue accumsan pretium eget eu sapien. Aliquam egestas et diam nec commodo. Nulla eu scelerisque erat, ut pharetra libero. Sed eget dapibus est. Proin at consectetur mauris.
            </p>
        </div>
    </div>
</div>
@push('scripts')
    @vite('resources/js/home/description.js')
@endpush
