<x-index-layout>
    <div class="h-full flex flex-col m-10">
        @foreach ($tweets as $index => $tweet)
            <x-tweet-card :time="$times[$index]" :tweet="$tweet"></x-tweet-card>
        @endforeach
    </div>
</x-index-layout>
