<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz List Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <x-navbar name="{{$name}}"></x-navbar>
    <div class="bg-gray-100 flex flex-col items-center justify-center pt-10">
    <div class="w-200 bg-white p-8 rounded-2xl shadow-lg mt-10">
        <h1 class="text-2xl text-blue-500">Quiz's List <a href="/admin-categories" class="text-sm text-blue-500">Back</a> </h1>
        <ul class="">
            <li>
                    <ul class="flex justify-between">
                        <li class="w-30 p-2">Quiz Id</li>
                        <li class="w-140 p-2">Name</li>
                        <li class="w-30 p-2">Action</li>
                    </ul>
                </li>
            @foreach ($quizData as $item)
                <li class="even:bg-gray-200">
                    <ul class="flex justify-between">
                        <li class="w-30 p-2">{{$item->id}}</li>
                        <li class="w-140 p-2">{{$item->name}}</li>
                        <li class="w-30 p-2 flex">
                            <a href="/show-quiz/{{$item->id}}/{{$item->name}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000"><path d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"/></svg>
                            </a>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
</body>
</html>