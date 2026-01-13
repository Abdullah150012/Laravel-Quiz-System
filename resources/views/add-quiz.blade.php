<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Quiz Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
    <x-navbar name="{{$name}}"></x-navbar>
    <div class="bg-gray-100 flex flex-col items-center justify-center pt-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            @if (!Session('quizDetails'))
                <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
                <form action="add-quiz" method="get" class="space-y-4">
                    {{-- @csrf --}}
                    <div>
                        <input type="text" name="quiz" placeholder="Add Quiz" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <select name="category_id" class="w-full px-3 py-2 border border-gray-500 text-gray-500 rounded-xl focus:outline-none">
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-blue-500  py-2 text-white rounded-xl cursor-pointer">Add</button>
                </form>
            @else
                <h1 class="text-xl font-bold text-green-500">{{Session('quizDetails')->name}}</h1>
                <h2 class="text-2xl text-center text-gray-800 mb-6">Add MCQs</h2>
                <form action="add-mcqs" method="post" class="space-y-4">
                    @csrf
                    <div>
                        <textarea type="text-area" name="question" placeholder="Enter Your Question Name" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none"></textarea>
                    </div>
                    <div>
                        <input type="text" name="a" placeholder="Enter First Option" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <input type="text" name="b" placeholder="Enter Second Option" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <input type="text" name="c" placeholder="Enter Third Option" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <input type="text" name="d" placeholder="Enter Forth Option" class="w-full px-3 py-2 border border-gray-500 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <select name="correct_ans" class="w-full px-3 py-2 border border-gray-500 text-gray-500 rounded-xl focus:outline-none">
                            <option disabled selected>Select Right Answer</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" value="add-more" class="w-full bg-blue-500  py-2 text-white rounded-xl cursor-pointer">Add More</button>
                    <button type="submit" name="submit" value="done" class="w-full bg-green-500  py-2 text-white rounded-xl cursor-pointer">Add and Finish</button>
                </form>
            @endif
    </div>
    </div>
</body>
</html>