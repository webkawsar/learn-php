<?php

include_once "vendor/autoload.php";

// use namespace
use App\Controllers\Student;

$student = new Student;


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$photo = $_FILES['photo'];

	// checking validation
	$message = "";
	if (empty($name) || empty($email) || empty($phone) || empty($photo)) {
		$message = "<div class='alert alert-danger' role='alert'>All fields are required</div>";
	} else {
		// $student -> createNewStudent($name, $email, $phone, $photo);
	}


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<div class="wrap">
		<a class="btn btn-primary" href="index.php">Back</a>
		<br>
		<br>

		<div class="card shadow">
			<div class="card-body">
				<h2>Sign In</h2>
				<?php
				if (isset($message)) {
					echo $message;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
					</div>
					
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign In">
					</div>
				</form>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>