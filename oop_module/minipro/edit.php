<?php

include_once "vendor/autoload.php";

// use namespace
use App\Controllers\Student;

$student = new Student;


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$new_photo = $_FILES['new_photo'];
	$old_photo = $_POST['old_photo'];
	$id = $_GET['edit_id'];

	// checking validation
	$message = "";
	if (empty($name) || empty($email) || empty($phone) || empty($new_photo)) {
		$message = "<div class='alert alert-danger' role='alert'>All fields are required</div>";
	} else {
		$student -> updateStudentData($id, $name, $email, $phone, $new_photo, $old_photo);
	}

}

if(isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $data = $student->showStudent($id);
} else {
	header("location:index.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Edit - <?php echo $data->name; ?></title>
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
				<h2>Edit Info - <?php echo $data->name; ?></h2>
				<?php
				if (isset($message)) {
					echo $message;
				}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="<?php echo $data->name; ?>">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="<?php echo $data->email; ?>">
					</div>
					
					<div class="form-group">
						<label for="">Phone</label>
						<input name="phone" class="form-control" type="text" value="<?php echo $data->phone; ?>">
					</div>
					<div class="form-group">
                        <img style="max-width: 200px" src="uploads/<?php echo $data->photo; ?>" alt="Student Image">
                        <br>
                        <br>
						<label for="">Photo</label>
						<input name="new_photo" class="form-control" type="file" style="padding: 4px 3px">
						<input type="text" name="old_photo" hidden value="<?php echo $data->photo; ?>">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Update">
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