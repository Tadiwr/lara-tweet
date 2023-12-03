@props(['user', 'times'])


<div class="md:w-3/4 mt-20 w-full" >
    <h1 class="text-3xl mb-10 " >{{$user->name . "'s Tweets"}}</h1>
    @foreach ($user->tweets as $key => $tweet)
    <x-tweet-card  :time='$times[$key]' :tweet='$tweet' ></x-tweet-card>
    {{-- {{ $tweet }} --}}
    @endforeach
</div>
