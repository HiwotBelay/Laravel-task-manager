<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-100 via-white to-indigo-200 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-indigo-600 mb-6 text-center">✏️ Edit Task</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Task Title</label>
                <input type="text" name="title" value="{{ $task->title }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="3"
                    class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                >{{ $task->description }}</textarea>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('tasks.index') }}"
                    class="text-indigo-600 hover:underline text-sm flex items-center">
                    ← Back to tasks
                </a>
                <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow">
                    ✅ Update Task
                </button>
            </div>
        </form>
    </div>

</body>
</html>
