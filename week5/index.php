<?php
    $connect = mysqli_connect('localhost', 'root', '', 'sandbox');

    if (!$connect) 
    {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error() . '<br>';
        exit;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Week5: PHP and MySQL</title>
    <!-- CSS -->
    <style>
        body{
            background-color: #efefef;
            font-family: sans-serif;
        }
        main{
            text-align: center;
        }
        .color-box{
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 4px 0px #8b8b8b;
            border-radius: 5px;
        }
        .header{
            margin-bottom: 40px;
            position: sticky;
            top: 0;
            background: #ffffff;
            padding: 10px 0;
            border-bottom: solid 1px #9d9d9d;
        }
        .color-strip{
            display: block;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .color-pill{
            display: inline-block;
            margin: 5px 8px;
            padding: 5px 10px;
            border-radius: 30px;
        }
        .btn{
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .btn-toggle{
            background-color: #ffe500;
            font-size: 16px;
            color: #000;
        }
        .btn-toggle:hover{
            background-color:#d0bb02;
            font-size: 16px;
            transition: all 0.3s;
        }
    </style>
    </head>
    <body>

        <h1>PHP and MySQL</h1>

        <?php

            // Create a query
            $query = 'SELECT id,name,hex FROM colors ORDER by id ASC';

            // Execute the query
            $result = mysqli_query($connect, $query);
            
            if (!$result)
            {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
            }

            // Display the number of recirds found
            echo '<p>There are <strong>' . mysqli_num_rows($result) . '</strong> colors in the table:</p>';

            echo '<div class="color-box">
                <div class="header">
                    <button id="btnCta" class="btn btn-toggle">Change to Pills / Strips</button>
                </div>
            ';
            // Loop through the records found
            while( $row = mysqli_fetch_array($result)){
                echo '<div id="colorBlock" class="color-strip" style="background-color:'. $row['hex'] .'">'. $row['name'] .'</div>';
            }
            
            echo '</div>';

        ?>

        <!-- Script to toggle between pills and strips -->
        <script>
        document.getElementById("btnCta").addEventListener("click", function() {
                document.querySelectorAll(".color-strip, .color-pill").forEach(function(element) {
                    element.classList.toggle("color-strip");
                    element.classList.toggle("color-pill");
                });
            });
        </script>

    </body>
</html>