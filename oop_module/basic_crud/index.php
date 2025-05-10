<?php

	include_once "autoload.php";

	$user = new User;


	// delete user functionalities
	if(isset($_GET["delete_id"])) {
		$id = $_GET["delete_id"];
		$user -> delete_user($id);
		header("location:index.php");
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

<?php

	// form submit handling
	if(isset($_POST["add"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];

		$user -> create_user($name, $email, $phone, $username);
	}

?>

	<div class="wrap-table ">
	<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_user_modal">Add new student</a>
		<br>
		<br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$users = $user -> get_users("users");
							while($user = $users->fetch_object()):
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->name; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->phone; ?></td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $user->id; ?>">Delete</a>
							</td>
						</tr>					
						<?php 
							endwhile;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	

	<div id="add_user_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Add new user</h2>
					<hr>
					<form action="" method="POST">
						<div class="form-group">
							<label for="">Name</label>
							<input name="name" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Phone</label>
							<input name="phone" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input name="username" class="form-control" type="text">
						</div>
						<div class="form-group">
							<input name="add" type="submit" value="Add" class="btn btn-primary">
						</div>
					</form>
				</div>
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