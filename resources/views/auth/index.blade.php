<x-index-layout>
    <div class=" form-div w-screen h-screen justify-start flex flex-col pt-10 items-center" >

        {{-- Errors --}}
        @if ($errors->any())
            <div class="bg-red-200 p-3 w-full">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endIf

        <form action="/auth/login" method="POST" class=" md:w-1/2  w-3/4 text-center justify-center items-center grid grid-cols-1 gap-3" >
            @csrf
            <h1 class="text-4xl font-semibold" >Welcome Back 👋</h1>
            <br>
            <input placeholder="Email" name="email" type="text">
            <input placeholder="Password" name="password" type="password">
            <input  class="form-btn" type='submit' >
            <a   href="/auth/register">Don't have an account yet? <br/> Click here to create one</a>
        </form>
    </div>
</x-index-layout>
