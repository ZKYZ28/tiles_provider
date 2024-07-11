<section class="flex flex-col items-center gap-6 md:px-0 lg:gap-16 2xl:py-16 max-w-screen-2xl m-auto w-full px-3 sm:px-8 lg:px-16 xl:px-32 relative">
    <img src="{{ asset('imgs/arrow.png') }}" class="hidden md:block absolute top-40 right-14 -rotate-[45deg] w-52 scale-x-[-1]">

    <div class="flex flex-col items-center">
        <h3 class="montserrat-font text-3xl md:text-5xl montserrat-font">Choose your plan</h3>
        <hr class="border border-b-4 w-3/12 md:w-1/3 mb-2 mt-4 md:mt-8">
    </div>
    <div class="flex flex-col gap-14 md:flex-row md:gap-20">

        <!-- Basic Pricing Card -->
        <div class="flex max-w-md flex-1 flex-col items-start justify-between gap-16 overflow-hidden rounded-2xl border border-slate-200 p-6 md:min-h-[520px] md:gap-12 bg-white">
            <div class="inline-flex flex-col items-start justify-start gap-6">
                <div class="flex flex-col items-start justify-start gap-4">
                    <!-- Variant Name -->
                    <p class="text-lg font-semibold">Basic</p>
                    <!-- Variant Description -->
                    <p class="text-sm leading-tight">For businesses that are small to medium-sized and have a narrower target market.</p>
                </div>
                <div class="flex flex-col gap-6 text-slate-600">
                    <div class="flex flex-col items-start justify-start gap-4">
                        <!-- Feature Item -->
                        <div class="inline-flex items-center justify-start gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#43A130" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="second-color">
                                <path
                                    d="M7.40274 9.33332L9.73734 11.6667L17.5 3.75M16.9975 8.2176C17.4019 9.90307 17.2206 11.6793 16.4848 13.2438C15.7489 14.8083 14.5039 16.0641 12.9619 16.7974C11.4199 17.5306 9.67622 17.696 8.02809 17.2651C6.37996 16.8343 4.9293 15.834 3.92329 14.4346C2.91727 13.0352 2.41815 11.3235 2.51095 9.59091C2.60376 7.85832 3.28276 6.21216 4.43225 4.9329C5.58175 3.65365 7.13063 2.82044 8.81497 2.57527C10.4993 2.33008 12.2149 2.6881 13.6694 3.5883">
                                </path>
                            </svg>
                            <p class="text-sm">1 map</p>
                        </div>
                        <!-- Feature Item -->
                        <div class="inline-flex items-center justify-start gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#43A130" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="second-color second-color">
                                <path
                                    d="M7.40274 9.33332L9.73734 11.6667L17.5 3.75M16.9975 8.2176C17.4019 9.90307 17.2206 11.6793 16.4848 13.2438C15.7489 14.8083 14.5039 16.0641 12.9619 16.7974C11.4199 17.5306 9.67622 17.696 8.02809 17.2651C6.37996 16.8343 4.9293 15.834 3.92329 14.4346C2.91727 13.0352 2.41815 11.3235 2.51095 9.59091C2.60376 7.85832 3.28276 6.21216 4.43225 4.9329C5.58175 3.65365 7.13063 2.82044 8.81497 2.57527C10.4993 2.33008 12.2149 2.6881 13.6694 3.5883">
                                </path>
                            </svg>
                            <p class="text-sm">10 000 requests</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full flex-col items-start gap-6">
                <!-- Variant Price -->
                <p class="inline-flex items-end justify-start gap-2">
                    <span class="text-center text-5xl font-medium">0€</span>
                    <span class="text-sm leading-tight text-slate-600">/month</span>
                </p>
                <!-- Action Button -->
                @if(!auth()->check())
                    <a href="{{route('login')}}" type="button"
                            class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed second-background-color stroke-white px-6 text-white hover:bg-green-700 h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                        <span>Free</span>
                    </a>
                @elseif(auth()->user()->completedPayment)
                    <a href="" type="button"
                       class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed second-background-color stroke-white px-6 text-white hover:bg-green-700 h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                        <span>Switch to this plan</span>
                    </a>
                @else
                    <p
                       class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-gray-500 stroke-white px-6 text-white h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                        <span>Current plan</span>
                    </p>
                @endif
            </div>
        </div>

        <!-- Professional Pricing Card -->
        <div class="flex max-w-md flex-1 flex-col items-start justify-between gap-16 overflow-hidden rounded-2xl border border-slate-200 p-6 md:min-h-[520px] md:gap-12 bg-white">
            <div class="inline-flex flex-col items-start justify-start gap-6">
                <div class="flex flex-col items-start justify-start gap-4">
                    <!-- Variant Name -->
                    <p class="text-lg font-semibold">Premium</p>
                    <!-- Variant Description -->
                    <p class="text-sm leading-tight">For businesses that are small to medium-sized and have a narrower target market.</p>
                </div>
                <div class="flex flex-col gap-6 text-slate-600">
                    <div class="flex flex-col items-start justify-start gap-4">
                        <!-- Feature Item -->
                        <div class="inline-flex items-center justify-start gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#43A130" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="second-color">
                                <path
                                    d="M7.40274 9.33332L9.73734 11.6667L17.5 3.75M16.9975 8.2176C17.4019 9.90307 17.2206 11.6793 16.4848 13.2438C15.7489 14.8083 14.5039 16.0641 12.9619 16.7974C11.4199 17.5306 9.67622 17.696 8.02809 17.2651C6.37996 16.8343 4.9293 15.834 3.92329 14.4346C2.91727 13.0352 2.41815 11.3235 2.51095 9.59091C2.60376 7.85832 3.28276 6.21216 4.43225 4.9329C5.58175 3.65365 7.13063 2.82044 8.81497 2.57527C10.4993 2.33008 12.2149 2.6881 13.6694 3.5883">
                                </path>
                            </svg>
                            <p class="text-sm">Unlimited map</p>
                        </div>
                        <!-- Feature Item -->
                        <div class="inline-flex items-center justify-start gap-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#43A130" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="second-color">
                                <path
                                    d="M7.40274 9.33332L9.73734 11.6667L17.5 3.75M16.9975 8.2176C17.4019 9.90307 17.2206 11.6793 16.4848 13.2438C15.7489 14.8083 14.5039 16.0641 12.9619 16.7974C11.4199 17.5306 9.67622 17.696 8.02809 17.2651C6.37996 16.8343 4.9293 15.834 3.92329 14.4346C2.91727 13.0352 2.41815 11.3235 2.51095 9.59091C2.60376 7.85832 3.28276 6.21216 4.43225 4.9329C5.58175 3.65365 7.13063 2.82044 8.81497 2.57527C10.4993 2.33008 12.2149 2.6881 13.6694 3.5883">
                                </path>
                            </svg>
                            <p class="text-sm">Unlimited requests</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full flex-col items-start gap-6">
                <!-- Variant Price -->
                <p class="inline-flex items-end justify-start gap-2">
                    <span class="text-center text-5xl font-medium">5€</span>
                    <span class="text-sm leading-tight text-slate-600">/month</span>
                </p>

                @if(!auth()->check())
                    <form action="{{route('stripe')}}" method="POST" class="w-full">
                        @csrf
                        <input type="hidden" name="paymentMethod" id="paymentMethod">
                        <button type="submit"
                                class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed second-background-color stroke-white px-6 text-white hover:bg-green-700  h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                            <span>Buy Now</span>
                        </button>
                    </form>
                @elseif(auth()->user()->completedPayment)
                    <p
                        class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed bg-gray-500 stroke-white px-6 text-white h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                        <span>Current plan</span>
                    </p>
                @else
                    <form action="{{route('stripe')}}" method="POST" class="w-full">
                        @csrf
                        <input type="hidden" name="paymentMethod" id="paymentMethod">
                        <button type="submit"
                                class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed second-background-color stroke-white px-6 text-white hover:bg-green-700  h-[42px] min-w-[42px] gap-2 w-full disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                            <span>Switch to this plan</span>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</section>
