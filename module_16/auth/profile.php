<?php 

include_once "templates/header.php";
include_once "autoload.php";

// get logged in user data
$id = $_SESSION['user_id'];
$data = logged_in_user(user_id: $id);
$user_data = $data -> fetch_object();

?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<img style="width:200px; height:200px; border-radius:50%;display:block;margin:20px auto;" src="photos/<?php echo $user_data->photo; ?>" alt="">
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
			<a href="index.php">Logout</a>
		</div>
	</div>
</div>





<?php include_once "templates/footer.php";  ?>