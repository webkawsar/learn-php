
<?php

/**
 * get submitted form data here
 */
    if(isset($_POST['submit'])) {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $file = $_FILES['profile'];
        

        // echo "<pre>";
        // print_r($file);
        // echo "</pre>";
        // echo "<br />";

        $file_name = $file['name'];
        $tmp_name = $file['tmp_name'];
        move_uploaded_file($tmp_name, "images/$file_name");

    }

   
?>

<div>
    
    
</div>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="email" id="email" placeholder="Email"> <br>
    <?php if(isset($error['email'])) echo $error['email'] ?><br>

    <input type="password" name="password" id="password" placeholder="Password"> <br> <br>
    <?php if(isset($error['password'])) echo $error['password'] ?><br>

    <input type="file" name="profile" id="profile" placeholder="Profile picture"> <br> <br>
    

    <input type="submit" name="submit" value="Log In">
</form>