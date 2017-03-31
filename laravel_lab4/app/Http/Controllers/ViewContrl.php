<?php
namespace App\Http\Controllers;

use App\Task;

class ViewContrl extends Controller{

	public function showTasks(){
		$tasks = Task::all();
		return view('view', compact('tasks'));
	}

	public function editTask($id = null){
		
		if($id){
			$task = Task::find($id);
		}else{
			$task = new Task;
		}
		return view("/add_task", compact("task"));
	}
}

?>