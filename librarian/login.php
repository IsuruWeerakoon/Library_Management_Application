<?php
    if (isset($_POST['submit'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result =  mysqli_query($connect,$query)or die("Query Failed -> ".mysqli_error($connect));
        $num_row = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if( $num_row > 0 ) {
            header('location:dashboard.php');
            $_SESSION['id']=$row['user_id'];
        }
        else{ ?>
			<div class="alert alert-danger">Access Denied</div>
            <?php
        }}
?>