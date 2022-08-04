<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();

        return view('home', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->date,
            'category_id' => $request->category,
            'user_id' => 1
        ]);

        return redirect(route('home'));
    }

    public function edit($id)
    {
        return view('tasks.edit');
    }

    public function delete($id)
    {
        return redirect(route('home'));
    }
}
