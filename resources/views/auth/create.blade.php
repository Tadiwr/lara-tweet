<x-index-layout>
    <div class=" form-div w-screen h-full justify-start flex flex-col pt-10 items-center" >

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

        <form method="POST" action="/auth/create" class="grid md:w-1/2  w-3/4 grid-cols-1 text-center  gap-3 justify-center items-center" >
            @csrf
            <h1 class="text-4xl font-semibold  " >Register ✨</h1>
            <br>
            <label>Name</label>
            <input required placeholder="Name" name="name" type="text">
            <label>Username</label>
            <input required placeholder="Username" name="username" type="text">
            <label>Email</label>
            <input required  placeholder="Email" name="email" type="email">
            <label>Password</label>
            <input required minlength="8" placeholder="Password" name="password" type="password">
            <input  class="form-btn" name="Register" type='submit' >
            <a  href="/auth">Already have an account yet? <br/> Click here to log in</a>
        </form>
    </div>
</x-index-layout>
