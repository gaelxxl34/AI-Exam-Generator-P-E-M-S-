<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>

    @include('partials.admin-navbar')
    <div class="p-4 sm:ml-64 mt-20 flex justify-center">
        <form action="{{ route('update.course', ['id' => $course['id']]) }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
            @csrf
            @method('PUT') {{-- Assuming the update operation is handled via PUT request --}}

            <div class="mb-4">
                <label for="courseUnit" class="block text-gray-700 text-sm font-bold mb-2">Course Unit:</label>
                <input type="text" id="courseUnit" name="courseUnit" value="{{ $course['name'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="courseCode" class="block text-gray-700 text-sm font-bold mb-2">Course Code:</label>
                <input type="text" id="courseCode" name="courseCode" value="{{ $course['code'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="year_sem" class="block text-gray-700 text-sm font-bold mb-2">Year/Semester:</label>
                <input type="text" id="year_sem" name="year_sem" value="{{ $course['year_sem'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Course
                </button>
            </div>
            {{-- Display success message --}}
            @if (session('success'))
                <div class="mt-3 text-sm font-medium text-green-500">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Display error message --}}
            @if (session('error'))
                <div class="mt-3 text-sm font-medium text-red-500">
                    {{ session('error') }}
                </div>
            @endif
        </form>
    </div>
</body>
</html>
