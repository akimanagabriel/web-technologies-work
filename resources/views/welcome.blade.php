<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('tailwind.js') }}"></script>
</head>

<body class="bg-slate-900">
    <main class="flex justify-center items-center h-[100vh]">
        <div class="flex flex-col text-center space-y-12">
            <h1 class="text-white text-4xl text-center uppercase">Welcome To Library MIS</h1>
            <div class="space-x-5">
                <button onclick="window.location.href='/login'"
                class="bg-indigo-900 text-white px-10 py-2 rounded-full hover:bg-indigo-800">Login</button>
            <button
            onclick="window.location.href='/register'"
             class="bg-indigo-900 text-white px-10 py-2 rounded-full hover:bg-indigo-800">Sigin</button>
            </div>
        </div>
    </main>
</body>

</html>
