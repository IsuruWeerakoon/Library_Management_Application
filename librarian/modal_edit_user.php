<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-heading"><strong>Edit User Details</strong></div>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
					<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['user_id']; ?>" required>
					<input type="text" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" name="password" id="inputPassword" value="<?php echo $row['password']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">First name</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Last name</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="lastname" value="<?php echo $row['lastname']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls" style="margin-left: 59%;">
					<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
<?php
    if (isset($_POST['edit'])){
        $user_id=$_POST['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        mysqli_query($connect,"update users set username='$username', password='$password' , firstname = '$firstname' , lastname = '$lastname'  where user_id='$user_id'")or die("Query Failed -> ".mysqli_error($connect)); ?>
		<script>
            window.location="users.php";
		</script>
        <?php
    }
?>