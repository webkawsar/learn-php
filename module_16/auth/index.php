<?php 

include_once "autoload.php";
include_once "templates/header.php";

if(isset($_COOKIE["login_user_id"])) {
	$id = $_COOKIE["login_user_id"];
	$_SESSION["user_id"] = $id;
	$_SESSION["login_status"] = true;
}


// check user login status
if (isset($_SESSION["login_status"])) {
	header("location:profile.php");
}


// user login process
if(isset($_POST['login_submit'])) {

	// get data
	$access = $_POST['access'];
	$password = $_POST['password'];

	// at first checking validation
	$msg = "";
	if(empty($access) || empty($password)) {

		$msg = show_message("danger", "All fields are required");

	} else {

		// sql query
		$results = connect_db()->query("SELECT * FROM users WHERE username='$access' OR email='$access' OR cell='$access'");

		// at first checking user exist or not
		if($results->num_rows === 1) {

			// checking user password correct or not
			$login_user_data = $results->fetch_object();
			if(password_verify($password, $login_user_data->password)) {

				// user info store in session
				$_SESSION["user_id"] = $login_user_data->id;
				$_SESSION["login_status"] = true;

				// data set to cookie
				setcookie("login_user_id", $login_user_data->id, time() + (60*60*24*7));
				
				header("location:profile.php");

			} else {
				$msg = show_message("danger", "Invalid credentials!");
			}

		} else {
			$msg = show_message("danger", "Invalid credentials!");
		}
	}
	
}

?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Log In Here</h2>

			<!-- Show Message Here -->
			<div class="msg">
				<?php 
					if(isset($msg)) {
						echo $msg;
					} 
				?>
			</div>

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
					<input class="btn btn-primary" type="submit" name="login_submit" value="Login">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<a href="register.php">Create an account</a>
		</div>
	</div>

	<div class="row">
		<?php

		if(isset($_COOKIE['recent_logout_users'])) :

			$users = json_decode($_COOKIE['recent_logout_users']);
			$users_id = implode(',', $users);
			$data = connect_db()->query("SELECT * FROM users WHERE id IN($users_id)");
			while($user = $data-> fetch_object()):
		?>
		<div class="col-md-4 my-3">
			<div class="card" style="position: relative">
				<div class="card-body" style="padding:5px;">
					<img style="width:100%; height:120px;" src="photos/users/<?php echo $user->photo; ?>" alt="">
					<div delete_id="<?php echo $user->id; ?>" style="text-align: center; position: absolute; top: 0; right: 10px; color: red; font-size: 25px; padding: 0 5px; cursor: pointer;" class="cancel_user">
						X
					</div>
				</div>
				<div class="card-footer" style="padding:5px;">
					<h4 style="text-align: center;"><?php echo $user->username; ?></h4>
				</div>
			</div>
		</div>
		<?php
			endwhile;
			endif;
		?>
	</div>
</div>

<?php include_once "templates/footer.php";  ?>