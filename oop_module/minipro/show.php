<?php

include_once "vendor/autoload.php";

use App\Controllers\Student;
$student = new Student;

if(isset($_GET['student_id'])) {
	$id = $_GET['student_id'];
	$data = $student->showStudent($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $data->name; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="wrap-table">
		<a class="btn btn-primary" href="index.php">Back</a>
		<br>
		<br>

		<div class="card shadow">
			<div class="card-body">
				<h2><?php echo $data->name; ?></h2>
                <img style="max-width: 200px" src="uploads/<?php echo $data->photo; ?>" alt="">

				<table class="table table-striped">
					<tr>
                        <td>Name</td>
                        <td><?php echo $data->name; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $data->email; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?php echo $data->phone; ?></td>
                    </tr>
				</table>
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