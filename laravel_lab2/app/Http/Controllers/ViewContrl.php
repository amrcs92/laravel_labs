<?php
namespace App\Http\Controllers;

class ViewContrl extends Controller{


	public function showTasks(){
		$tasks = ['todoListApp','UberApp','mashaweerApp','vizeetaApp','pokemongoApp'];
		return view('view', ["tasks" => $tasks]);
	}
}

?>