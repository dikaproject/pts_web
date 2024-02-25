<x-app-layout>
    <!-- Header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight bg-blue-500 p-4">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <style>
        /* Tambahkan style untuk membuat daftar task dapat disortir dengan drag and drop */
        #task-list {
            list-style: none;
            padding: 0;
        }

        #task-list li {
            user-select: none;
            margin-bottom: 20px; /* Menambahkan margin antara setiap task */
            padding: 15px;
            background-color: #f9f9f9; /* Warna latar belakang task */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk tiap task */
        }

        #task-list li.completed {
            opacity: 0.6; /* Mengurangi kecerahan task yang sudah selesai */
            text-decoration: line-through; /* Mengcoret teks task yang sudah selesai */
        }

        #task-list li.bg-red-100 {
            background-color: #fde2e2; /* Warna latar belakang merah untuk task yang sudah lewat deadline */
        }

        #task-list li:hover {
            background-color: #e5e5e5; /* Warna latar belakang saat hover */
        }

        .task-icons {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .task-buttons button {
            margin-right: 10px;
        }
    </style>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


    <!-- Pop-up Warning -->
    <script>
        // Function to show Toastify message
        function showWarningMessage(message) {
            Toastify({
                text: message,
                duration: 5000, // Set duration
                close: true, // Enable close button
                gravity: "top", // Position of the toast message
                backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)", // Background color
                stopOnFocus: true, // Stop timeout when focusing toast
            }).showToast();
        }

        // Check if there's a warning message and display it using Toastify
        @if (session()->has('warning'))
            showWarningMessage("{{ session('warning') }}");
        @endif
    </script>


    <!-- Task List -->
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue-100 border-b border-gray-200">
                    <!-- Create New Task Button and Search Form -->
                    <div class="flex items-center justify-between mb-4">
                        <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Task</a>
                        <div class="flex items-center">
                            <form action="{{ route('tasks.index') }}" method="GET" class="flex items-center">
                                <input type="text" name="search" id="search" placeholder="Search task..." class="border border-gray-300 rounded px-2 py-1 mr-2">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
                            </form>
                        </div>
                    </div>

                    <!-- Task List -->
                    @if ($tasks->count() > 0)
                        <ul id="task-list">
                            @foreach ($tasks as $task)
                                @if (strpos(strtolower($task->task_name), strtolower(request('search'))) !== false)
                                    <li class="relative {{ $task->status ? 'completed' : '' }} {{ $task->deadline_task && \Carbon\Carbon::now()->greaterThan($task->deadline_task) ? 'bg-red-100' : '' }}">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">
                                                <!-- Task Icon -->
                                                <i class='bx bx-task task-icons'></i>
                                                <div>
                                                    <!-- Task Name -->
                                                    <a href="{{ route('tasks.show', $task) }}" class="text-blue-500 hover:underline text-lg font-semibold">{{ $task->task_name }}</a>
                                                    <!-- Task Description -->
                                                    <p class="text-sm text-gray-600">{{ $task->task_description }}</p>
                                                    <!-- Task Deadline -->
                                                    <p class="text-xs text-gray-500">Deadline: {{ $task->deadline_task }}</p>
                                                </div>
                                            </div>
                                            <div class="task-buttons">
                                                <!-- Update Status Form -->
                                                <form action="{{ route('tasks.updatestatus', $task) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="{{ $task->status ? 0 : 1 }}">
                                                    <button type="submit" {{ \Carbon\Carbon::now()->greaterThan($task->deadline_task) ? 'disabled' : '' }} class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">{{ $task->status ? 'Mark as Incomplete' : 'Mark as Completed' }}</button>
                                                </form>
                                                <!-- Task Detail Button -->
                                                <a href="{{ route('tasks.show', $task) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Detail</a>
                                                <!-- Delete Task Form -->
                                                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <p>No tasks found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
