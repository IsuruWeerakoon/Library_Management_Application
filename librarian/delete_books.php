<?php
    include('dbcon.php');
    $id=$_GET['id'];
    mysqli_query($connect,"update book set status = 'Archived' where book_id='$id'")or die("Query Failed -> ".mysqli_error($connect));
    header('location:books.php');