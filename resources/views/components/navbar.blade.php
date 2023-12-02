<div class=" grid grid-cols-2 px-5  w-full h-20 bg-blue-400 text-white  justify-start items-center" >


    {{-- Logo --}}
    <div class="h-full w-1/4 flex justify-start items-center" >
        <a href="/" class="text-4xl font-extrabold font-mono" >LaraTweet</a>
    </div>

    {{-- Auth Action --}}
    <div class="h-full w-full flex justify-end items-center" >

        @guest
            <a href="/auth" class="text-xl " >Log In</a>
        @else
            <a href="/account/{{Auth::user()->username}}" class="text-xl " >Hello, {{Auth::user()->name}}</a>
        @endguest
    </div>

</div>
