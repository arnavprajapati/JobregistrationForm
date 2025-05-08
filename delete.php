<?php
    include 'connection.php';
    $id = $_GET['id'];
    $deleteQuery = " delete from jobregistration where id = $id ";
    $query = mysqli_query($conn,$deleteQuery);
    header('location:list.php');
?>