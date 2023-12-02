<div class=" grid grid-cols-2 px-5  w-full h-20 bg-blue-400 text-white  justify-start items-center" >


    {{-- Logo --}}
    <div class="h-full w-1/4 flex justify-start items-center" >
        <a href="/" class="text-4xl font-extrabold font-mono" >LaraTweet</a>
    </div>

    {{-- Auth Action --}}
    <div class="h-full w-full flex justify-end items-center" >

        @guest
            <div class="">
                <a class="text-xl font-medium p-2" href="/auth" class="text-xl " >Log In</a>
            </div>
            @else
            <a class="text-xl font-medium p-2" href="/" class="text-xl " >Home</a>
            <a class="text-xl font-medium p-2" href="/tweet" class="text-xl " >Post</a>
            <a class="text-xl font-medium p-2" href="/account/{{Auth::user()->username}}" class="text-xl " >My Account</a>

            <div class="w-1 h-1/2 mx-5 bg-white"  >

            </div>

            <a href="/account/{{Auth::user()->username}}" class="text-xl " >Hello, {{Auth::user()->name}}</a>
        @endguest
    </div>

</div>
