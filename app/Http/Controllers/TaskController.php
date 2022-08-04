<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

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
        return view('tasks.create');
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
