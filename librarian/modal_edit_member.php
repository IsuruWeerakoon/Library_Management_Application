<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-heading"><strong>Edit Member Details</strong></div>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">First name:</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
					<input type="hidden" id="inputEmail" name="id" value="<?php echo $id;  ?>" placeholder="Firstname" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Last name:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Gender:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="gender" readonly="readonly" value="<?php echo $row['gender']; ?>" placeholder="Gender" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Address:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contact Number:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{10}" class="search" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Type:</label>
				<div class="controls">
					<select name="type" required>
						<option><?php echo $row['type']; ?></option>
						<option>Student</option>
						<option>Teacher</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level:</label>
				<div class="controls">
					<select name="year_level" required>
						<option><?php echo $row['year_level']; ?></option>
						<option>First Year</option>
						<option>Second Year</option>
						<option>Third Year</option>
						<option>Fourth Year</option>
						<option>Faculty</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Status:</label>
				<div class="controls">
					<select name="status" required>
						<option><?php  echo $row['status']; ?></option>
						<option>Active</option>
						<option>Banned</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<div class="controls" style="margin-left: 61%;">
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
        $id=$_POST['id'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $type=$_POST['type'];
        $year_level=$_POST['year_level'];
        $status=$_POST['status'];
        mysqli_query($connect,"update member set firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',type = '$type',year_level = '$year_level',status = '$status' where member_id='$id'")or die("Query Failed -> ".mysqli_error($connect));?>
		<script>
            window.location="member.php";
		</script>
        <?php
    }
?>