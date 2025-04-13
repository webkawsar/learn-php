<?php

	$id = $_POST['id'];

	$connection = new mysqli('localhost', 'root', '', 'ajax129');
	$data = $connection->query("SELECT * FROM students WHERE id='$id'");

	$profile = $data->fetch_object();
?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>User Profile: <?php echo $profile->name ?></h2>
			<img style="width:300px; height:300px; border-radius: 50%; margin:50px auto;display:block" src="photos/<?php echo $profile->photo ?>" alt="">
			<h1><?php echo $profile->name ?></h1>
			<h3><?php echo $profile->cell ?></h3>
			<table class="table">
				<tr>
					<td>Username:</td>
					<td><?php echo $profile->username ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $profile->email ?></td>
				</tr>
				<tr>
					<td>Cell:</td>
					<td><?php echo $profile->cell ?></td>
				</tr>
			</table>

			<a id="back" class="btn btn-sm btn-primary" href="index.php">Back</a>
		</div>
	</div>
</div>