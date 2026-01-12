<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-md flex justify-between items-center px-4 py-6">
        <div class="text-2xl text-gray-700 hover:text-blue-700 cursor-pointer">
            Quiz System
        </div>
        <div class="flex gap-7">
            <a class="text-gray-700 hover:text-blue-700" href="">Categories</a>
            <a class="text-gray-700 hover:text-blue-700" href="">Quiz</a>
            <a class="text-gray-700 hover:text-blue-700" href="">Logout</a>
            <a class="text-gray-700 hover:text-blue-700" href="">Welcome {{$name}}</a>
        </div>
    </nav>
</body>
</html>