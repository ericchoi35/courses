<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Courses Assignment</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
	<style type="text/css">
	form {
		display: inline-block;
	}
	</style>
</head>
<body>
<div class="container">
	<h3>Are you sure you want to delete the following course?</h3>
	<h4>Name: <?= $course['name'] ?></h4>
	<h4>Description: <?= $course['description'] ?></h4>
	<a class='btn btn-default' href='/'>No</a>
	<form action="/courses/destroy" method='post'>
		<input type='hidden' name='id' value="<?= $course['id'] ?>">
		<input type='submit' class='btn btn-danger' value='Yes! I want to delete this'>
	</form>
</div>
</body>
</html>