@props(['tweet'])

<div class="border-t-2 border-b-2 border-solid w-full" >

    <div class="flex flex-row justify-start p-5 items-center">

        <div class="h-10 w-10 bg-slate-300 rounded-full" >

        </div>

        <a  href="/account/{{$tweet->user->username}}" class="mx-1 text-xl font-bold " >{{$tweet->user->name}}</a>
        <a href="/account/{{$tweet->user->username}}" class="mx-1 text-xl font-medium text-slate-500" >{{"@" . $tweet->user->username}}</a>
    </div>


    <div class="p-5" >
        <h1 class="text-xl" >{{$tweet->content}}</h1>

    </div>


    <div class=" mb-5 w-1/5  p-2" >
        <a href="/tweet/like/{{$tweet->id}}" class="rounded-full  hover:bg-blue-400 py-2 px-4 text-center text-xl text-black ">👍 Like</a>
        <span class="text-xl" >{{$tweet->like_count}}</span>
    </div>


</div>
