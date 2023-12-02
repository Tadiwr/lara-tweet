<x-index-layout>
    <div class="h-full flex flex-col m-10">
        @foreach ($tweets as $tweet)
            <x-tweet-card :tweet="$tweet"></x-tweet-card>
        @endforeach
    </div>
</x-index-layout>
