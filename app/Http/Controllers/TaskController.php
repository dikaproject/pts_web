<?php
// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{

public function index(Request $request)
{
    $search = $request->input('search');

    $tasks = auth()->user()->tasks()
                ->when($search, function ($query) use ($search) {
                    return $query->where('task_name', 'like', '%'.$search.'%');
                })
                ->latest()
                ->get();

    // Periksa batas waktu (deadline) untuk setiap tugas
    foreach ($tasks as $task) {
        if ($task->deadline_task && Carbon::now()->greaterThan($task->deadline_task)) {
            // Jika tugas telah melewati batas waktu, tambahkan pesan peringatan
            session()->flash('warning', 'Deadline Untuk Task "' . $task->task_name . '" Sudah Melewati batas!');
        }
    }

    return view('tasks.index', compact('tasks'));
}



    public function create()
    {
        return view('tasks.create');
    }


    public function updateStatus(Request $request, Task $task)
{
    $request->validate([
        'status' => 'required|boolean',
    ]);

    $task->update(['status' => $request->status]);

    return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
}

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'task_description' => 'nullable',
            'deadline_task' => 'nullable|date',
        ]);

        auth()->user()->tasks()->create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        // Tampilkan halaman detail tugas (tasks)
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required',
            'task_description' => 'nullable',
            'deadline_task' => 'nullable|date',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
