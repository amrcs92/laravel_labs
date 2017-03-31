<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="row row-content">
		<br>
			<div class="col-xs-6">
				<a href="task/new" class="btn btn-warning">Add Tasks</a>
				<a href="task_tracker" class="btn btn-success col-xs-offset-3">Home</a>
			</div>
			<div class="col-xs-12">
				<h1>Tasks Lists</h1>
				<div>
					@foreach($tasks as $task) 
						<br/>

						<ul class="list-group col-xs-12">
							<li class="list-group-item col-xs-3 list-tasks"> 
								<form method="post" action="task/delete/{{$task->id}}">
									{{csrf_field()}}
									<button type="submit" class="close" aria-label="Close" aria-hidden="true" style="color: white;">&times;</button>
										<a href="task/{{$task->id}}" style="color:#ffffff">{{$task->taskName}}</a> 
								</form>
							</li>&nbsp;&nbsp;
							<a href="task/update/{{$task->id}}" class="btn btn-danger">Edit</a>
						</ul>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>

