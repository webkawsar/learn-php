<?php
	include_once "autoload.php";

	if(isset($_GET['delete_id'])) {

		$id = $_GET['delete_id'];
		$photo = $_GET['photo'];

		// remove photo
		unlink('public/profiles/'.$photo);

		// delete user
		delete_by_id("users", $id);

		// clear url
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

		/**
		* Submit user form
		*/
		if(isset($_POST['submit'])) {
			$user_name = $_POST['user_name'];
			$full_name = $_POST['full_name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$location = $_POST['location'];

			// checking empty field validation
			if(empty($user_name) || empty($full_name) || empty($email) || empty($phone) || empty($age) || empty($gender) || empty($location)) {
				
				$message = show_message("danger", "All fields are required!");
				
			} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

				$message = show_message("danger", "Invalid email!");

			} elseif(data_check('users', 'email', $email)) {

				$message = show_message("warning", "Email already exists!");

			} elseif(data_check('users', 'user_name', $user_name)) {

				$message = show_message("warning", "Username already exists!");
				
			} else {

				// file upload
				$file_data = file_upload($_FILES['photo'], "public/profiles/", ['jpg']);

				// response data
				$unique_file_name = $file_data['unique_name'];
				$error_message = $file_data['error_message'];

				if(empty($error_message)) {

					// save data to database
					create('users', [
						'user_name' => $user_name,
						'full_name' => $full_name,
						'email' => $email,
						'phone' => $phone,
						'age' => $age,
						'gender' => $gender,
						'photo' => $unique_file_name,
						"location" => $location
					]);

					// show a success message
					$message = show_message("success", "User added successfully");
				} else {
					$message = show_message("danger", $error_message);
				}

				
			}
		}


	?>


	

	<div class="wrap-table">
		<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_student_modal">Add new user</a>
		<br>
		<br>

		<?php

			if(isset($message)) {
				echo $message;
			}

		?>

		<div class="card shadow">
			<div class="card-body">
				<h2>All Users</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Full name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Photo</th>
							<th>Location</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$users = get_all('users');
							$id = 1;
							while($user = $users -> fetch_assoc()):
						?>
						<tr>
							<td><?php echo $id; $id++; ?></td>
							<td><?php echo $user['user_name']; ?></td>
							<td><?php echo $user['full_name']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td><?php echo $user['phone']; ?></td>
							<td><?php echo $user['age']; ?></td>
							<td><?php echo $user['gender']; ?></td>
							<td><img src="public/profiles/<?php echo $user['photo'] ?>" alt=""></td>
							<td><?php echo $user['location']; ?></td>
							<td><?php echo $user['status']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="show.php?show_id=<?php echo $user['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $user['id']; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" id="delete_btn" href="?delete_id=<?php echo $user['id']; ?>&photo=<?php echo $user['photo']; ?>">Delete</a>
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

	<!-- user Create Modal -->
	<div id="add_student_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add new user</h3>
				</div>

				<div class="modal-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="user_name">Username</label>
							<input name="user_name" class="form-control" type="text" value="<?php old('user_name') ?>">
						</div>

						<div class="form-group">
							<label for="full_name">Full name</label>
							<input name="full_name" class="form-control" type="text" value="<?php old('full_name') ?>">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text" value="<?php old('email') ?>">
						</div>

						<div class="form-group">
							<label for="">Phone</label>
							<input name="phone" class="form-control" type="text" value="<?php old('phone') ?>">
						</div>

						<div class="form-group">
							<label for="age">Age</label>
							<input name="age" class="form-control" type="text" value="<?php old('age') ?>">
						</div>

						<div class="form-group">
							<label for="gender">Gender</label>
							<select name="gender" id="gender" class="form-control">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>

						<div class="form-group">
							<label for="location">Location</label>
							<select class="form-control" name="location" id="location">
								<option value="">-select-</option>
								<option value="Mirpur">Mirpur</option>
								<option value="Banani">Banani</option>
								<option value="Uttara">Uttara</option>
								<option value="Mohammadpur">Mohammadpur</option>
								<option value="Badda">Badda</option>
								<option value="Gualshan">Gualshan</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Profile Photo</label> <br>
							<img id="load_student_photo" style="max-width:100%;width:200px;" src="Profile Picture" alt="">
							<br>

							<label for="student_photo"> <img width="70" src="assets/media/img/up.png" alt=""></label>
							<input id="student_photo" name="photo" style="display:none;" class="form-control" type="file">
						</div>
						
						<div class="form-group">
							<input name="submit" class="btn btn-primary" type="submit" value="Submit">
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>
	

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('#student_photo').change(function(e) {

			let file_url = URL.createObjectURL(e.target.files[0]);
			$('#load_student_photo').attr('src', file_url);

		});

		$('#delete_btn').click(function() {
			let confirmation = confirm("Are you sure?");
			if(confirmation){
				return true;
			} else {
				return false;
			}
		})
	</script>
</body>
</html>