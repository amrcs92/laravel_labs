<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<title>Add Tasks</title>
</head>
<body>
<br>
<div class="container">
	<div class="row row-content">
			
			<h1>Edit Task</h1>
					
			<form method="post" action="{{$task->id}}" class="form-horizontal col-xs-4">
					{{csrf_field()}}
				<div class="form-group">
					<input type="text" class="form-control" name="taskEdit" 
					value="{{$task->taskName}}">
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-block" type="submit">Update +</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

<?php




?>