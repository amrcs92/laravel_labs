<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
/**
* task controller
*/
class TaskCtrl extends Controller{
	
	function showTaskDetails(Request $request){
		
		$tasks = Task::find($request->id);
		
		return view('task', ['task' => $tasks]);
	}
}


?>