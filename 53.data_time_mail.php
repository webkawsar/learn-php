<?php

    // get time from 1970
    echo time();
    echo "<br />";


    // get current date
    // echo date('d/m/y');
    // echo date('d/M/Y');
    // echo date('d/F/Y');
    // echo date('D/F/Y');

    
    date_default_timezone_set('Asia/Dhaka');
    // echo date('h:i:s a');
    echo date('g:i:s a');
    echo "<br />";



    // get date based on DB date
    echo date('d-M-Y', 1115887663);



    // send email in mail server
    // mail('web.kawsarahmed@gmail.com', 'This is Subject', 'This is Message Text');

















