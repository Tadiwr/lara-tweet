<x-index-layout>
    <div class="flex pt-20 flex-col justify-center items-center" >
        <h1 class="text-4xl font-bold ">Post a Tweet</h1>
        <form method="POST" action="{{url("/tweet/create")}}" class="text-black " >
            @csrf
            <textarea name="content" required class="bg-slate-100 w-full h-full text-black p-10 " maxlength="150"  placeholder="Whats on your mind?"></textarea>
            <input type="submit" name="Post" class="bg-blue-300" />
        </form>
    </div>
</x-index-layout>
