<?php
    include('dbcon.php');
    $id=$_GET['id'];
    mysqli_query($connect,"delete from users where user_id='$id'") or die("Query Failed -> ".mysqli_error($connect));
    header('location:users.php');
