<?php 

include_once "templates/header.php";

// check user login status
if (isset($_SESSION["login_status"])) {
	echo "true";
	header("location:profile.php");
}

?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Log In Here</h2>
			<form action="" method="POST" id="login_form">
				<div class="form-group">
					<label for="access">Username / Email / Cell</label>
					<input id="access" name="access" class="form-control" type="text">
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input id="password" name="password" class="form-control" type="password">
				</div>

				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Login">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<a href="register.php">Create an account</a>
		</div>
	</div>
</div>

<?php include_once "templates/footer.php";  ?>