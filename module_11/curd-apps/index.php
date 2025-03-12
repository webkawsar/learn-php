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
	

	<div class="wrap-table">
		<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_student_modal">Add new student</a>
		<br>
		<br>

		<div class="card shadow">
			<div class="card-body">
				<h2>All Students</h2>
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
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Asraful Haque</td>
							<td>haq@gmail.com</td>
							<td>01717700811</td>
							<td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Student Create Modal -->
	<div id="add_student_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Add new student</h3>
				</div>
				<div class="modal-body">
					<form action="" method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="">Student Name</label>
							<input name="name" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>


						<div class="form-group">
							<label for="">Cell</label>
							<input name="cell" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Username</label>
							<input name="username" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Location</label>
							<select class="form-control" name="location" id="">
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
							<label for="">Age</label>
							<input name="age" class="form-control" type="text">
						</div>

						<div class="form-group">
							<label for="">Gender</label> <br>
							<input name="gender" type="radio" checked value="Male" id="Male"> <label for="Male">Male</label>
							<input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
						</div>

						<div class="form-group">
							<label for="">Dept</label>
							<select class="form-control" name="dept" id="">
								<option value="">-select-</option>
								<option value="BBA">BBA</option>
								<option value="EEE">EEE</option>
								<option value="CSE">CSE</option>
								<option value="English">English</option>
								<option value="Bangla">Bangla</option>
								<option value="IT">IT</option>
							</select>
						</div>

						<div class="form-group">
							<label for="">Profile Photo</label> <br>
							<img id="load_student_photo" style="max-width:100%;width:200px;" src="Profile Picture" alt="">
							<br>
							<label for="student_photo"> <img width="100" src="assets/media/img/up.png" alt=""></label>
							<input id="student_photo" name="photo" style="display:none;" class="form-control" type="file">
						</div>
						
						<div class="form-group">
							<label for=""></label>
							<input name="stc" class="btn btn-primary" type="submit" value="add student">
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
	</script>
</body>
</html>