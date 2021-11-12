<?php
    //ob_start();
    include('header.php');
    include('navbar.php');
    $divHide = "";
    if (isset($_POST['submit'])){
        session_start();
        //include ('session.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect,$query)or die("Query Failed -> ".mysqli_error($connect));
        $num_row = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if( $num_row > 0 ){
            echo '<script> location.replace("dashboard.php");</script>';
            //echo "<script> window.location.href = 'dashboard.php'; </script>";
            //header("Location: dashboard.php");
            /*ob_end_flush();
            exit();*/
            $_SESSION['id']=$row['user_id'];
        }
        else{
            $divHide = "show";
        }
    }
?>
	<script type="text/javascript">
        function timedMsg(){
            var t=setInterval("change_time();",1000);
        }
        function change_time(){
            var d = new Date();
            var hour=d.getHours();
            var minute=d.getMinutes();
            var second=d.getSeconds();
            if(hour <10 ){
                hour='0'+hour;
            }
            if(minute <10 ){
                minute='0' + minute;
            }
            if(second<10){
                second='0' + second;
            }
            document.getElementById('Hour').innerHTML =hour+':';
            document.getElementById('Minut').innerHTML=minute+':';
            document.getElementById('Second').innerHTML=second;
        }
        timedMsg();
	</script>
	<div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
					<div class="sti">
						<img src="../LMS/Logo.png" class="img-rounded">
					</div>
					<br>
					<div class="alert alert-success">
						<strong style="font-family: 'Arial Black', arial-black;font-size: 20px;"><i class="icon-lock icon-large"></i>&nbsp;&nbsp;ABC Library Management System Login&nbsp;</strong>
						<div class="pull-right">
							<table>
								<tr>
									<td><i class="icon-calendar icon-small" style="font-size: 20px;"></i>
                                        <?php
                                            $Today = date('y:m:d');
                                            $new = date('d F Y, l', strtotime($Today));
                                            echo $new.'.  ';
                                        ?>&nbsp;&nbsp;</td>
									<td id="Hour"></td>
									<td id="Minut"></td>
									<td id="Second"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="login">
						<br>
						<h3 style="text-align: center;"><strong>Please Enter Login Details Below..</strong></h3>
						<br>
						<form class="form-horizontal" method="POST">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Username :</label>
								<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password :</label>
								<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls" style="margin-left: 200px;">
									<button class="btn btn-success btn-large" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Login </button>
								</div>
							</div>
							<script>
                                $(function(){
                                    $("#message").delay(1500).hide(1000);
                                });
							</script>
                            <?php
                                if ($divHide == "show"){?>
									<div id = "message" class="alert alert-danger">Access Denied</div>
                                    <?php
                                }?></form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>