<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->input('status');
        if($data) {
            $tasks = Task::where('user_id', Auth::id())
                ->where('status', $data)
                ->get();
        } else {
            $tasks = Task::where('user_id', Auth::id())->get();
        }

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'dead_line' => 'nullable|date',
        ]);
        $data['user_id'] = Auth::user()->id;
        $task = Task::create($data);
        return redirect()->route('tasks.index')->with('success', 'Task criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'dead_line' => 'nullable|date',
        ]);
        $task->update($data);
        return redirect()->route('tasks.index')->with('success', 'Tasak atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deletada com sucesso!');
    }

    public function complete(Task $task)
    {
        $task->status = 'completed';
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Task marcada como completa!');
    }
}
