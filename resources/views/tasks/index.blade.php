<!-- resources/views/tasks/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Create New Task</a>

                    @if ($tasks->count() > 0)
                        <ul>
                            @foreach ($tasks as $task)
                                <li class="mb-4 border-b border-gray-200">
                                    <a href="{{ route('tasks.show', $task) }}" class="text-blue-500 hover:underline">{{ $task->task_name }}</a>
                                    <p class="text-gray-500">{{ $task->task_description }}</p>
                                </li>
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
