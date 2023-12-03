<div class=" grid grid-cols-2 px-5  w-full h-20 bg-blue-400 text-white  justify-start items-center" >


    {{-- Logo --}}
    <div class="h-full w-1/4 flex justify-start items-center" >
        <a href="/" class="text-4xl font-extrabold font-mono" >ShangwaTweet</a>
    </div>

    {{-- Auth Action --}}
    <div class="h-full w-full flex justify-end items-center" >

        @guest
            <div class="">
                <a class="text-xl font-medium p-2" href="/auth" class="text-xl " >Log In</a>
            </div>
            @else
            <div class="hidden w-full h-full md:flex flex-row justify-end items-center " >
                <a class="text-xl font-medium p-2" href="/" class="text-xl " >Home</a>
                <a class="text-xl font-medium p-2" href="/tweet" class="text-xl " >Post</a>
                <a class="text-xl font-medium p-2" href="/account/{{Auth::user()->username}}" class="text-xl " >My Account</a>
                <a class=" text-red-300 text-xl font-medium p-2" href="/auth/logout" class="text-xl " >Log Out</a>
            </div>

            <div class=" md:block hidden w-1 h-1/2 mx-5 bg-white"  >

            </div>

            <div class="md:hidden grid grid-cols-1 gap-2 w-1/5" >
                <div class="bg-white h-1 rounded-full  w-full"></div>
                <div class="bg-white h-1 rounded-full w-full"></div>
                <div class="bg-white h-1 rounded-full w-full"></div>
            </div>
            <a href="/account/{{Auth::user()->username}}" class="text-xl hidden md:block" >Hello, {{Auth::user()->name}}</a>
        @endguest
    </div>

</div>
