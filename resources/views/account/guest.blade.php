<x-index-layout>
    <div class="w-full h-full pt-20 pl-20" >
        <div class="h-32 w-32 mb-5 bg-slate-300 rounded-full" >

        </div>
        <h1 class="text-5xl font-bold" >{{$user->name}}</h1>
        <h1 class="text-3xl font-medium  text-slate-500 " >{{'@' . $user->username}}</h1>

        <br>

        <div class="grid grid-cols-2">
            <h1  class="text-2xl"  >{{$user->follower_count . " Followers"}}</h1>
            <h1 class="text-2xl" >{{$user->following_count . " Following"}}</h1>
        </div>

        <br>
        
        @guest
            <button class="bg-blue-400 px-6 py-2 rounded-full" >Login To Follow</button>
        @else
            <button class="bg-blue-400 px-6 py-2 rounded-full" >Follow</button>
        @endguest
    </div>
</x-index-layout>
