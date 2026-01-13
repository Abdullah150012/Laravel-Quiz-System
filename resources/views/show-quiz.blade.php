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
    <div class="bg-gray-100 flex flex-col items-center justify-center pt-10">
    <div class="w-200 bg-white p-8 rounded-2xl shadow-lg mt-10">
        <h1 class="text-2xl text-blue-500">All Current Quiz's MCQs List <a href="/add-quiz" class="text-sm text-blue-500">Back</a> </h1>
        <ul class="">
            <li>
                    <ul class="flex justify-between">
                        <li class="w-50 p-2">MCQ Id</li>
                        <li class="w-150 p-2">Name</li>
                    </ul>
                </li>
            @foreach ($mcqs as $mcq)
                <li class="even:bg-gray-200">
                    <ul class="flex justify-between">
                        <li class="w-50 p-2">{{$mcq->id}}</li>
                        <li class="w-150 p-2">{{$mcq->question}}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    </div>
</body>
</html>