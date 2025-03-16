<?php
     require_once "autoload.php";

     if(isset($_GET['show_id'])) {
        $id = $_GET['show_id'];
        $data = get_by_id("users", $id);
        $user = $data -> fetch_assoc();
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $user['id']; ?></title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto mt-5">
				<div class="card p-5">
					<img class="simg shadow" width="300" style="display:block; margin: 0 auto;" src="public/profiles/<?php echo $user['photo']; ?>" alt="">
					<h2 class="text-center"><?php echo $user['full_name']; ?></h2>
					<p class="text-center"><?php echo $user['user_name']; ?></p>
					<div class="card-body">
						<table class="table">
							<tr>
								<td>Name</td>
								<td><?php echo $user['full_name']; ?></td>
							</tr>

							<tr>
								<td>Email</td>
								<td><?php echo $user['email']; ?></td>
							</tr>

							<tr>
								<td>Cell</td>
								<td><?php echo $user['phone']; ?></td>
							</tr>

							<tr>
								<td>Gender</td>
								<td><?php echo $user['gender']; ?></td>
							</tr>

							<tr>
								<td>Location</td>
								<td><?php echo $user['location']; ?></td>
							</tr>
							
						</table>

						<a class="btn btn-primary btn-sm" href="index.php">Back</a>
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

	</script>
</body>

</html>