<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
    <form action="" class="space-y-4">
        <div>
            <label class="text-gray-500 mb-1" for="">Admin Name</label>
            <input type="text" placeholder="Enter Admin Name" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
        </div>
        <div>
            <label class="text-gray-500 mb-1" for="">Password</label>
            <input type="text" placeholder="Enter Password" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
        </div>
        <button type="submit" class="w-full bg-blue-500  py-2 text-white rounded-xl">Submit</button>
    </form>
    </div>
</body>
</html>