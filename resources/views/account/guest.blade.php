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

        <br>

        @guest
            <a href="/auth/login" class="bg-blue-400 px-6 py-2 rounded-full" >Login To Follow</a>
        @else
            @if ($is_follower)
            <a href="/unfollow/{{$user->id}}" class="bg-stone-600 px-6 py-2 rounded-full" >Unfollow</a>
            @else
            <a href="/follow/{{$user->id}}" class="bg-blue-400 px-6 py-2 rounded-full" >Follow</a>

            @endif
        @endguest

        <br>

        {{-- Tweets by that user --}}
        <x-tweets-con :user='$user' :times='$times' ></x-tweets-con>
    </div>
</x-index-layout>
