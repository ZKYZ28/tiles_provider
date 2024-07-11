<div class="w-2/12 flex flex-col main-background-color pt-10 min-content-page-height relative md:pl-8 pl-1 rounded-r-lg">

    <p class="text-gray-500 text-sm font-bold uppercase">Maps</p>
    <ul>
        <li class="wallet-btn my-2 text-gray-500 py-2 px-2 text-xl @if(request()->routeIs('show.my_maps') || request()->routeIs('show.map')) side-menu-active @endif w-[90%]">
            <a href="{{ route('show.my_maps') }}">
                <i class="fa-regular fa-map mr-3"></i><span class="font-semibold md:inline hidden">Maps</span>
            </a>
        </li>
        @if(auth()->user()->completedPayment || (!auth()->user()->completedPayment && count(auth()->user()->maps) == 0))
        <li class="wallet-btn my-2 text-gray-500 py-2 px-2 text-xl @if(request()->routeIs('show.create_map')) side-menu-active @endif w-[90%]">
            <a href="{{ route('show.create_map') }}">
                <i class="fa-solid fa-plus mr-3"></i><span class="font-semibold md:inline hidden">Create</span>
            </a>
        </li>
        @endif
    </ul>


    <p class="text-gray-500 text-sm font-bold uppercase mt-10">Account</p>
    <ul>
        <li class="my-2 py-2 px-2 text-gray-500 text-xl w-[90%] @if(request()->routeIs('show.account')) side-menu-active @endif">
            <a href="{{route('show.account')}}"><i class="fa-regular fa-user  mr-3"></i><span class="font-semibold md:inline hidden">Account</span></a>
        </li>
    </ul>

    <div class="px-4 py-3">
        <form action="{{route('logout')}}" method="post">
            @method("delete")
            @csrf
            <button class="absolute bottom-10 left-0.5 md:left-8 text-gray-500 font-semibold second-color"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
        </form>
    </div>
</div>
