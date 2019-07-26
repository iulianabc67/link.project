<?php

namespace App\Http\Controllers;

use App\Card;
use App\Task;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;


class TasksController extends Controller
{
    public  function __construct()
    {
        //$this->middleware('auth');



        /*
         * $this->middleware('auth');  //toate metodele pot fi accesate doar logat

         */
        /*
        * $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);//lista de metode ce pot fi accesate doar logat
        */
        /*
         * $this->middleware('auth', ['except' => ['cart', 'listProducts']]); //lista de metode ce pot fi accesate nelogat
         */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = task::all();
        return view('tasks.task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listTasks()
    {
        $tasks = Task::all();

        return view('tasks.task', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|max:11',
            'title' => 'required',
            'description' => 'required|max:1025',
            'status' => 'required'
        ]);

        $task = new Task();

        $task->category = $request->get('category');
        $task->title = $request->get('title');
        $task->description = $request->get('description');
        $task->status = $request->get('status');

        $task->save();



        return redirect()->route('tasks.index')->with('success','Task added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task',$task));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task',$task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'category' => 'required|max:11',
            'title' => 'required',
            'description' => 'required|max:1025',
            'status' => '0'
        ]);
        $task->update($request->all());

        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Task $task)
    {
        $task->delete();

        $request->session()->flash('message', 'Successfully deleted this task');

        return redirect('tasks.task');
    }
}
