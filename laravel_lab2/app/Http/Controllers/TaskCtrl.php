<?php
namespace App\Http\Controllers;
/**
* task controller
*/
class TaskCtrl extends Controller{
	
	function showTaskDetails($taskName = null){
		
		$tasks = ['todoListApp','UberApp','mashaweerApp','vizeetaApp','pokemongoApp'];
		$mytask = $tasks[$taskName];
		
		return view('task', ['task' => $mytask]);
	}
}


?>