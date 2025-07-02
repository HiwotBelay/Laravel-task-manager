<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Task Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-white to-indigo-100 min-h-screen py-10 px-4">

    <div class="max-w-2xl mx-auto">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold text-indigo-700 mb-2">📝 Task Manager</h1>
            <p class="text-gray-500">Organize your tasks like a pro!</p>
        </div>

        <!-- Create Task Form -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-10">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Add a New Task</h2>

            <form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
                @csrf
                <input type="text" name="title" placeholder="Task Title" required
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />

                <textarea name="description" placeholder="Task Description"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>

                <button type="submit"
                    class="bg-indigo-600 text-white font-semibold px-6 py-2 rounded hover:bg-indigo-700 transition w-full">
                    ➕ Add Task
                </button>
            </form>
        </div>

        <!-- Task List -->
        <h2 class="text-2xl font-semibold text-indigo-600 mb-4">📋 Your Tasks</h2>

        <div class="space-y-4">
            @forelse($tasks as $task)
            <div
                class="bg-white p-5 rounded-lg shadow flex flex-col md:flex-row md:justify-between md:items-center hover:shadow-lg transition {{ $task->is_completed ? 'opacity-60' : '' }}">
                
                <div>
                    <h3 class="text-lg font-bold {{ $task->is_completed ? 'line-through text-gray-500' : 'text-gray-800' }}">
                        {{ $task->title }}
                    </h3>
                    <p class="text-sm text-gray-500">{{ $task->description }}</p>
                </div>

                <div class="mt-4 md:mt-0 flex flex-wrap gap-2">
                    <!-- Toggle Status -->
                    <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button
                            class="text-sm bg-emerald-500 hover:bg-emerald-600 text-white px-3 py-1 rounded transition">
                            {{ $task->is_completed ? '⏪ Mark Incomplete' : '✅ Mark Complete' }}
                        </button>
                    </form>

                    <!-- Edit -->
                    <a href="{{ route('tasks.edit', $task) }}"
                        class="text-sm bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition">
                        ✏️ Edit
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this task?')"
                            class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <p class="text-gray-500">No tasks available yet. Start by adding one above 👆</p>
            @endforelse
        </div>
    </div>

</body>
</html>
