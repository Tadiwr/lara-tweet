<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Tweet</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="h-full w-full flex flex-col" >
        <x-navbar></x-navbar>
        <div class="w-full h-full">
            {{$slot}}
        </div>
    </main>
</body>
</html>
