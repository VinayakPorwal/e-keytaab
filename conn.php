<?php
            $servername = "localhost";
            $database = "training";
            $username = "root";
            $password = "";



            // server connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            if ($conn) {
                // echo "success";
            } else {
                die("error" . mysqli_connect_error());
            }
?>