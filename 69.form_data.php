
<?php

/**
 * get submitted form data here
 */
    if(isset($_POST['submit'])) {
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $message = '';
        if(empty($email) || empty($password)) {
            $message = "All fields are required";
        } else {
            $message = 'Data is Ok';
        }
    }

   
?>

<div>
    
    <?php 
        if(isset($message)) {
            echo $message;
        }

    ?>
</div>

<form action="" method="POST">
    <input type="text" name="email" id="email" placeholder="Email"> <br>
    <input type="password" name="password" id="password" placeholder="Password"> <br> <br>
    <input type="submit" name="submit" value="Log In">
</form>