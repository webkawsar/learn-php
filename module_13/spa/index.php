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
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a id="all" class="btn btn-primary btn-sm" href="">All Students</a>
					<a id="add_student" class="btn btn-primary btn-sm" href="">Add new student</a>
					<a id="profile" class="btn btn-primary btn-sm" href="">Profile</a>
				</div>
			</div>
		</div>
	</div>

	<div id="app">

	</div>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		$("#add_student").click(() => {
			$.ajax({
				url: "create.php",
				success: (data) => {
					$("#app").html(data);
				}
			})

			return false;
		})
	</script>
</body>

</html>