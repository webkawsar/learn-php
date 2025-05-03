<?php

include_once("../../autoload.php");

// get data
// $access = $_POST['access'];
// $password = $_POST['password'];

// // sql query
// $results = connect_db()->query("SELECT * FROM users WHERE username='$access' OR email='$access' OR cell='$access'");

// // at first checking user exist or not
// if($results->num_rows === 1) {

//     // checking user password correct or not
//     $login_user_data = $results->fetch_object();
//     if(password_verify($password, $login_user_data->password)) {

//         // user info store in session
//         $_SESSION["user_id"] = $login_user_data->id;
//         $_SESSION["login_status"] = true;
        
//         header("location: ../../profile.php");
//         exit;

//     } else {
//         echo "<div>Invalid credentials!</div>";
//     }

// } else {
//     echo "<div>Invalid credentials!</div>";
// }


if(isset($_POST['id'])) {
	$id = $_POST['id'];
	$_SESSION["user_id"] = $id;
	$_SESSION["login_status"] = true;
    header("location: ../../profile.php");
}




