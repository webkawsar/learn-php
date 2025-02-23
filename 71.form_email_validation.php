
<?php

/**
 * get submitted form data here
 */
    if(isset($_POST['submit'])) {
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $error = [];
        if(empty($email)) {
            $error['email'] = "Email is required";
        }

        if(empty($password)) {
            $error['password'] = "Password is required";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Invalid email";
        }



    }

   
?>

<div>
    
    
</div>

<form action="" method="POST">
    <input type="text" name="email" id="email" placeholder="Email"> <br>
    <?php if(isset($error['email'])) echo $error['email'] ?><br>

    <input type="password" name="password" id="password" placeholder="Password"> <br> <br>
    <?php if(isset($error['password'])) echo $error['password'] ?><br>

    <input type="submit" name="submit" value="Log In">
</form>