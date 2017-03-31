<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
* New controller
*/
class NewCtrl extends Controller{
	public function ay7aga(){
		return view('add_task');
	}
	public function addNewTasks(Request $request){
		return view('add_task', ["task" =>$request->task]);
	}
}

?>