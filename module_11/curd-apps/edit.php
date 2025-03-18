<?php
    require_once "autoload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<?php

/**
* update user data
*/
if(isset($_POST['update'])) {
    $user_name = $_POST['user_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $id = $_GET['edit_id'];
	$old_photo = $_POST['old_photo'];

    // checking empty field validation
    if(empty($user_name) || empty($full_name) || empty($email) || empty($phone) || empty($age) || empty($gender) || empty($location)) {
        $message = show_message("danger", "All fields are required!");
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = show_message("danger", "Invalid email!");
    } else {

		// at first checking picture upload or not
		if(!empty($_FILES['new_photo']['name'])) {

			// file upload
			$file_data = file_upload($_FILES['new_photo'], "public/profiles/", ['jpg', 'png']);

			// response data
			$unique_file_name = $file_data['unique_name'];
			$error_message = $file_data['error_message'];

			if(empty($error_message)) {

				// save data to database
				update('users', [
					'user_name' => $user_name,
					'full_name' => $full_name,
					'email' => $email,
					'phone' => $phone,
					'age' => $age,
					'gender' => $gender,
					'photo' => $unique_file_name,
					"location" => $location
				], $id);
	
				// show a success message
				$message = show_message("success", "User data updated successfully");

				// remove photo
				unlink('public/profiles/'.$old_photo);

			} else {
				$message = show_message("danger", $error_message);
			}

		} else {
			// save old phot
			$unique_file_name = $old_photo;

			// save data to database
			update('users', [
				'user_name' => $user_name,
				'full_name' => $full_name,
				'email' => $email,
				'phone' => $phone,
				'age' => $age,
				'gender' => $gender,
				'photo' => $unique_file_name,
				"location" => $location
			], $id);

			// show a success message
			$message = show_message("success", "User data updated successfully");
		}

    }
}

?>

<?php

    if(isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $data = get_by_id("users", $id);
        $edit_data = $data -> fetch_object();
    }

?>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto mt-5">
				<a class="btn btn-sm btn-primary" href="index.php">Back</a>
                <br>
                <br>

                <?php
                    if (isset($message)) {
                        echo $message;
                    }
                ?>

				<div class="card">
					<div class="card-body">
						<h2>User Data Edit</h2>
						<hr>

						<form action="" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label for="">User Name</label>
								<input name="user_name" class="form-control" value="<?php echo $edit_data -> user_name; ?>" type="text">
							</div>

                            <div class="form-group">
								<label for="">Full name</label>
								<input value="<?php echo $edit_data->full_name; ?>" name="full_name" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Email</label>
								<input value="<?php echo $edit_data -> email; ?>" name="email" class="form-control" type="text">
							</div>


							<div class="form-group">
								<label for="">Phone</label>
								<input value="<?php echo $edit_data->phone; ?>" name="phone" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Location</label>
								<select class="form-control" name="location" id="">
									<option value="">-select-</option>
									<option <?php echo ($edit_data->location == 'Mirpur') ? 'selected' : ''; ?> value="Mirpur">Mirpur</option>
									<option <?php echo ($edit_data->location == 'Banani') ? 'selected' : ''; ?> value="Banani">Banani</option>
									<option <?php echo ($edit_data->location == 'Uttara') ? 'selected' : ''; ?> value="Uttara">Uttara</option>
									<option <?php echo ($edit_data->location == 'Mohammadpur') ? 'selected' : ''; ?> value="Mohammadpur">Mohammadpur</option>
									<option <?php echo ($edit_data->location == 'Badda') ? 'selected' : ''; ?> value="Badda">Badda</option>
									<option <?php echo ($edit_data->location == 'Gualshan') ? 'selected' : ''; ?> value="Gualshan">Gualshan</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Age</label>
								<input value="<?php echo $edit_data->age; ?>" name="age" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Gender</label> <br>
								<input name="gender" type="radio" <?php echo ($edit_data->gender == 'male') ? 'checked' : ''; ?> value="male" id="Male"> <label for="Male">Male</label>
								<input name="gender" type="radio" <?php echo ($edit_data->gender == 'female') ? 'checked' : '';  ?> value="female" id="Female"> <label for="Female">Female</label>
							</div>

							

							<div class="form-group">
								<label for="">Profile Photo</label> <br>
								<img id="load_student_photo_edit" style="max-width:100% ;" src="public/profiles/<?php echo $edit_data->photo; ?>" alt="User Image">
								<br>
								<br>

								<label for="student_photo_edit"> <img width="100" src="assets/media/img/up.png" alt=""></label>
								<input id="student_photo_edit" name="new_photo" style="display:none;" class="form-control" type="file">

								<input type="hidden" value="<?php echo $edit_data->photo; ?>" name="old_photo">
							</div>

							<div class="form-group">
								<label for=""></label>
								<input name="update" class="btn btn-primary" type="submit" value="Update student">
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('#student_photo_edit').change(function(e) {

			let file_url = URL.createObjectURL(e.target.files[0]);
			$('#load_student_photo_edit').attr('src', file_url);

		});
	</script>
</body>

</html>