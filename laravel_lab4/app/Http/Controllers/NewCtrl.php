<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;

/**
* New controller
*/
class NewCtrl extends Controller{
	
		public function showForm(Request $request){
			return view("/add_task");
	}

		public function addNewTasks(Request $request){
			//assign input get from user to variable result
			$result = $request->get('task');

			// create new object of model
			$newTask = new Task;

			//create new record assign from result variable that came from input
			$newTask->taskname = $result;

			$newTask->save();
			
			return redirect("/view");
		}
}

?>