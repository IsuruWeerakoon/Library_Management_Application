<?php
    include('dbcon.php');
    $id=$_GET['id'];
    mysqli_query($connect,"delete from member where member_id='$id'") or die("Query Failed -> ".mysqli_error($connect));
    header('location:member.php');