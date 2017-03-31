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
				<a href="add_task" class="btn btn-warning">Add Tasks</a>
				<a href="task_tracker" class="btn btn-success col-xs-offset-3">Home</a>
			</div>
			<div class="col-xs-12">
				<h1>Tasks Lists</h1>
				<div>
					@foreach($tasks as $key => $taskname) 
						<br/>

						<ul class="list-group col-xs-12">
							<li class="list-group-item col-xs-3 list-tasks"> 
								<a href="task/{{$key}}" style="color:#ffffff">{{$taskname}} 
							</li>
						</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>

</body>
</html>

