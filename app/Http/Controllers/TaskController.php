<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index(){
        return view('/index/index');
    }
    public function create(){
        return view('/index/tijiao');
    }

    public function store(Request $request){
        $task = new Task();
        $task->task_title = $request->input('task-title');
        $task->task_content = $request->input('task-content');
        $task->save();
        return redirect('/task/show');
    }

    public function show(){
        $tasks=Task::all();
        return view('/index/show',['tasks'=>$tasks]);
    }
}
