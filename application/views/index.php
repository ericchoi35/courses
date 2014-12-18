<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Courses Assignment</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
</head>
<body>
<div class="container">
	<div class='row'>
		<h3>Add a new course</h3>
		<div class='col-sm-4'>
		<form action='courses/create' method='post' role="form">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" name="name" class="form-control" placeholder="Enter course name here">
		  </div>
		  <div class="form-group">
		    <label>Description</label>
		    <textarea name="description" class="form-control" placeholder="Enter description here"></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
		<div class='col-sm-4 col-sm-offset-2'>
<?php 		if($this->session->flashdata('error'))
			{	?>
				<?= $this->session->flashdata('error') ?>
<?php		}	?>
		</div>
	</div>

	<div class='row'>
		<h3>Courses</h3>
		<table class='table table-striped'>
			<thead>
				<tr>
					<th>Course Name</th>
					<th>Description</th>
					<th>Date Added</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
<?php 			foreach($courses as $course)
				{	?>
				<tr>
					<td><?= $course['name'] ?></td>
					<td><?= $course['description'] ?></td>
					<td><?= $course['created_at'] ?></td>
					<td><a href='courses/show/<?= $course['id'] ?>'>Remove</a></td>
				</tr>
<?php			}	?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>