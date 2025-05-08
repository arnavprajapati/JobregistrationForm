<?php

    $username = "root";
    $password = "";
    $server = 'localhost';
    $db = 'checkForm';

    $conn = mysqli_connect($server,$username,$password,$db);

    if($conn){
        ?>
            <script>
                alert('connection successfull');
            </script>
        <?php
    }else{
        die("no connection" . mysqli_connect_error());
    }

?>