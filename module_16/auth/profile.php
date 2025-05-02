<?php 

include_once "templates/header.php";
include_once "autoload.php";

// get logged in user data
$id = $_SESSION['user_id'];
$data = logged_in_user(user_id: $id);
$user_data = $data -> fetch_object();

// user logout 
if (isset($_GET["logout"])) {

	// set logout users to cookie
	if(isset($_COOKIE['recent_logout_users'])) {
		
		$decoded_logout_users = json_decode($_COOKIE['recent_logout_users']);
		array_push($decoded_logout_users, $user_data->id);
		$encoded_logout_users = json_encode($decoded_logout_users);
		
	} else {

		$encoded_users[] = $user_data->id;
		$encoded_logout_users = json_encode($encoded_users);
	}

	// set cookie
	setcookie("recent_logout_users", $encoded_logout_users, time() + (60*60*24*7), "/");

	// destroy session
	session_destroy();

	// remove cookie
	setcookie("login_user_id", $user_data->id, time() - (60*60*24*7));

	// redirect homepage
	header("location:index.php");
}

// checking user login status
if (!isset($_SESSION["login_status"])) {
	header("location:index.php");
}

?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<img style="width:200px; height:200px; border-radius:50%;display:block;margin:20px auto;" src="photos/users/<?php echo $user_data->photo; ?>" alt="">
			<h1><?php echo $user_data->username; ?></h1>
			<h3><?php echo $user_data->cell; ?></h3>

			<hr>
			<table class="table">
				<tr>
					<td>Full Name</td>
					<td><?php echo $user_data->full_name; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $user_data->email; ?></td>
				</tr>
				<tr>
					<td>Cell</td>
					<td><?php echo $user_data->cell; ?></td>
				</tr>
			</table>
		</div>
		<div class="card-footer">
			<a href="?logout=user_logout">Logout</a>
		</div>
	</div>
</div>





<?php include_once "templates/footer.php";  ?>