<?php
    include('dbcon.php');
    if (isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $type=$_POST['type'];
        $year_level=$_POST['year_level'];
        mysqli_query($connect,"insert into member(firstname,lastname,gender,address,contact,type,year_level) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level')")or die("Query Failed -> ".mysqli_error($connect));
        header('location:member.php');
    }