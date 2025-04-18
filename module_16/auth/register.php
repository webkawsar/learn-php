<?php include_once "templates/header.php";  ?>

<div class="wrap shadow">
	<div class="card">
		<div class="card-body">
			<h2>Create your account</h2>
			<div class="msg"></div>
			<form id="user_reg_form" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Name</label>
					<input name="name" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Username</label>
					<input name="uname" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Cell</label>
					<input name="cell" class="form-control" type="text">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input name="pass" class="form-control" type="password">
				</div>
				<div class="form-group">
					<label for="">Photo</label>
					<input name="photo" class="form-control" type="file">
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Register">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<a href="index.php">Log In now</a>
		</div>
	</div>
</div>





<?php include_once "templates/footer.php";  ?>