<!-- resources/views/tasks/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="task_name" class="block text-sm font-medium text-gray-700">Task Name</label>
                            <input type="text" name="task_name" id="task_name" class="mt-1 p-2 border rounded-md w-full" value="{{ $task->task_name }}" required autofocus>
                        </div>
                        <div class="mb-4">
                            <label for="task_description" class="block text-sm font-medium text-gray-700">Task Description</label>
                            <textarea name="task_description" id="task_description" class="mt-1 p-2 border rounded-md w-full">{{ $task->task_description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="deadline_task" class="block text-sm font-medium text-gray-700">Deadline</label>
                            <input type="datetime-local" name="deadline_task" id="deadline_task" class="mt-1 p-2 border rounded-md w-full" value="{{ $task->deadline_task ? \Carbon\Carbon::parse($task->deadline_task)->format('Y-m-d\TH:i') : '' }}">
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
