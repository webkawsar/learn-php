<?php
    require_once "autoload.php";

    if(isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $data = get_by_id("users", $id);
        $edit_data = $data -> fetch_object();
    }

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



	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto mt-5">
				<a class="btn btn-sm btn-primary" href="index.php">Back</a>

				<div class="card">
					<div class="card-body">
						<h2>Student Data Edit</h2>
						<?php
                            if (isset($msg)) {
                                echo $msg;
                            }
						?>
						<hr>
						<form action="" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label for="">User Name</label>
								<input name="name" class="form-control" value="<?php echo $edit_data -> full_name; ?>" type="text">
							</div>

							<div class="form-group">
								<label for="">Email</label>
								<input value="<?php echo $edit_data -> email; ?>" name="email" class="form-control" type="text">
							</div>


							<div class="form-group">
								<label for="">Cell</label>
								<input value="<?php echo $edit_data->phone; ?>" name="cell" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Username</label>
								<input value="<?php echo $edit_data->user_name; ?>" name="username" class="form-control" type="text">
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
								<input name="gender" type="radio" <?php echo ($edit_data->gender == 'male') ? 'checked' : ''; ?> value="Male" id="Male"> <label for="Male">Male</label>
								<input name="gender" type="radio" <?php echo ($edit_data->gender == 'female') ? 'checked' : '';  ?> value="Female" id="Female"> <label for="Female">Female</label>
							</div>

							

							<div class="form-group">
								<label for="">Profile Photo</label> <br>
								<img id="load_student_photo_edit" style="max-width:100% ;" src="public/profiles/<?php echo $edit_data->photo; ?>" alt="User Image">
								<br>

								<label for="student_photo_edit"> <img width="100" src="assets/media/img/up.png" alt=""></label>
								<input id="student_photo_edit" name="new_photo" style="display:none;" class="form-control" type="file">
								<input type="hidden" value="<?php echo $edit_data->photo; ?>" name="old_photo">
							</div>

							<div class="form-group">
								<label for=""></label>
								<input name="stc" class="btn btn-primary" type="submit" value="Update student">
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