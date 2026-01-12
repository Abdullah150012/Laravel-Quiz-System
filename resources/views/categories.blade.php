<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <x-navbar name="{{$name}}"></x-navbar>
    @if (session('category'))
        <div class="bg-green-300 text-green-700 p-3 text-center">{{session('category')}}</div>
    @endif
    <div class="bg-gray-100 flex items-center justify-center pt-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-800 mb-6">Add Category</h2>
    <form action="add-category" method="post" class="space-y-4">
        @csrf
        <div>
            <input type="text" name="category" placeholder="Add Category" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
        </div>
        <button type="submit" class="w-full bg-blue-500  py-2 text-white rounded-xl cursor-pointer">Add</button>
    </form>
    </div>
    </div>
</body>
</html>