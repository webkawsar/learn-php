<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // php magic constant

        // get directory name
        // echo __DIR__;

        // get file name
        // echo __FILE__;

        // get file line number
        // echo __LINE__;

        // get function name 
        function myFunc() {
            echo __FUNCTION__;
        }

        myFunc();


        // class related magic constant
        // __CLASS__
        // __METHOD__
        // __NAMESPACE__

        
    ?>
</body>
</html>