<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        //$tasks = DB::table('tasks')->get();
        //return view('admin.task', ['tasks' => $tasks]);
    	$user = Auth::user();
    	return view('task',compact('user'));
    }

    public function add()
    {                                                                                             
    	return view('task');
    }

    public function create(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
    	$task->description = $request->description;
    	$task->user_id = Auth::id();
    	$task->save();
    	return redirect('/task'); 
    }

    public function edit(Task $task)
    {

    	if (Auth::check() && Auth::user()->id == $task->user_id)
        {            
                return view('edit', compact('task'));
        }           
        else {
             return redirect('/');
         }            	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/');
    	}
    	else
    	{
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/'); 
    	}    	
    }
}
