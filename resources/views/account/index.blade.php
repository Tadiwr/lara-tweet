<x-index-layout>
    <div class="w-full h-full pt-20 md:pl-20 pl-5" >
        <div class="h-32 w-32 mb-5 bg-slate-300 rounded-full" >

        </div>
        <h1 class="text-5xl font-bold" >{{$user->name}}</h1>
        <h1 class="text-3xl font-medium  text-slate-500 " >{{'@' . $user->username}}</h1>

        <br>

        <div class="grid md:grid-cols-3 grid-cols-1 mb-10">
            <h1  class="text-2xl font-bold"  >{{$user->following_count }} <span class="font-normal text-slate-500">Following</span></h1>
            <h1  class="text-2xl font-bold"  >{{$user->follower_count }} <span class="font-normal text-slate-500">Followers</span></h1>
            <h1  class="text-2xl font-bold"  >{{count($user->tweets) }} <span class="font-normal text-slate-500">Tweets</span></h1>
        </div>

        <a href="/auth/logout" class="bg-red-500 px-6 py-2 rounded-full " >Log Out</a>

        {{-- Tweets by that user --}}
        <div class="md:w-3/4 mt-20 md:p-0 w-full px-2" >
            <h1 class="text-3xl mb-10 " >Your Tweets</h1>
            @foreach ($user->tweets as $key => $tweet)
            <x-tweet-card  :time='$times[$key]' :tweet='$tweet' ></x-tweet-card>
            {{-- {{ $tweet }} --}}
            @endforeach
        </div>

        <br>
    </div>
</x-index-layout>
