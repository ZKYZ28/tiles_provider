<header class="header-container flex justify-center">
    <nav class="header-nav-container flex justify-between items-center w-full w-[92%] mx-auto">

        <!--- LEFT PART --->
        <div class="flex items-center justify-center w-5/12 xl:w-2/12">
            <a href="{{route('home')}}"><img class="w-24 md:w-36" src="{{ asset('imgs/logo.png') }}" alt="APP LOGO"></a>
        </div>

        <!--- NAV BAR --->
        <div class="nav-links z-50 duration-500 absolute xl:static xl:min-h-fit left-0 top-[-100%] w-full xl:w-6/12 xl:items-center px-5 mr-12">
            <ul class="flex xl:flex-row flex-col xl:justify-center w-full xl:gap-[4vw] mt-4 xl-mt-0 gap-8 mb-8 xl:mb-0">

            </ul>
        </div>

        <!--- RIGHT BAR --->
        <div class="flex w-3/12 justify-end xl:block mr-4 xl:mr-20">
            @auth
                <div class="relative flex justify-end">
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full xl:me-0 focus:ring-4 focus:ring-gray-100 mr-4" type="button">
                        <span class="hidden xl:block mr-3.5 text-lg font-semibold px-4 py-2 uppercase montserrat-font">{{auth()->user()->name}}</span>
                        <svg class="w-2.5 h-2.5 ms-0 xl:ms-3 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow absolute top-full right-0 w-60">

                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            @auth
                                <li>
                                    @if(auth()->user()->completedPayment)
                                        <span class="px-4 py-2 text-lg  flex items-center text-yellow-500 border-b">Premium <img src="{{asset('imgs/crown.png')}}" class="w-8 ml-2"></span>
                                    @else
                                        <span class="px-4 py-4 text-sm">Basic</span>
                                    @endif
                                </li>
                                <li class="mt-4">
                                    <a href="{{route('show.my_maps')}}" class="px-4  hover:text-gray-500 text-sm">Dashboard</a>
                                </li>
                            @endauth
                        </ul>

                        <div class="px-4 py-3">
                            <form action="{{route('logout')}}" method="post">
                                @method("delete")
                                @csrf
                                <button><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="hidden xl:flex justify-end items-center gap-6">
                    <a href="{{route('login')}}" class="w-28 text-center font-bold second-background-color text-white p-2.5 rounded">Login</a>
                </div>
            @endauth

            <button id="burger-menu-header" name="menu" class="text-3xl cursor-pointer xl:hidden" data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 :text-gray-400" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </nav>
</header>

