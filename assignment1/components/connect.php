<?php
    $connect = mysqli_connect('localhost','root','','movie_db');
    if(!$connect){
        echo 'Error Code: ' . mysqli_connect_errno();
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
    }

    $base_url = 'http://localhost/humber/HTTP-5225-0NB/assignment1/';
?>