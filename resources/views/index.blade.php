<x-index-layout>
    <div class="h-full flex flex-col m-2">
        @forelse ($tweets as $index => $tweet)
            <x-tweet-card :time="$times[$index]" :tweet="$tweet"></x-tweet-card>
        @empty
            <div class="w-full h-full flex flex-col mt-20 justify-center items-center" >
                <h1 class="text-5xl" >There are no tweets 🙉</h1>
                <br>
                <a class="text-blue-300 hover:text-blue-600"  href="/tweet" >Be the first to post a tweet</a>
            </div>
        @endforelse

    </div>
</x-index-layout>
