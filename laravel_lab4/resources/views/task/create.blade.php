<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Add Tasks</title>
</head>
<body>
<br>
<div class="container">
	<div class="row row-content">
			
			<h1>Add New Task</h1>
					
			<form method="post" action="../task" class="form-horizontal col-xs-4">
					{{csrf_field()}}
				<div class="form-group">
					<input type="text" class="form-control" name="task">
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-block" type="submit">Add +</button>
				</div>
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			</form>
		</div>
	</div>
</body>
</html>

<?php




?>