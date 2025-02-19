
<?php

/**
 * get submitted form data here
 */
    if(isset($_GET['submit'])) {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        $email = $_GET['email'];
        $password = $_GET['password'];

        echo "Email: $email and Password: $password";
    }

   
?>

<form action="" method="GET">
    <input type="text" name="email" id="email" placeholder="Email"> <br>
    <input type="password" name="password" id="password" placeholder="Password"> <br> <br>
    <input type="submit" name="submit" value="Log In">
</form>