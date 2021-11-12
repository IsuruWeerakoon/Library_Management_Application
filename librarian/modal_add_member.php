<div id="add_member" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-success"><strong>Register a new Member</strong></div>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">First Name:</label>
				<div class="controls">
					<input type="text" id="inputEmail" name="firstname"  placeholder="First Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Last Name:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="lastname"  placeholder="Last Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Gender:</label>
				<div class="controls">
					<select name="gender" required>
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Address:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="address"  placeholder="Address" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contact Number:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{10,10}" class="search" name="contact"  placeholder="Contact Number"  autocomplete="off"  maxlength="11" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">User Type:</label>
				<div class="controls">
					<select name="type" required>
						<option></option>
						<option>Student</option>
						<option>Teacher</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level:</label>
				<div class="controls">
					<select name="year_level" >
						<option> </option>
						<option>First Year</option>
						<option>Second Year</option>
						<option>Third Year</option>
						<option>Fourth Year</option>
						<option>Faculty</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<div class="controls" style="margin-left: 63%;">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
<?php
    if (isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $type=$_POST['type'];
        $year_level=$_POST['year_level'];
        $status = 'Active';
        mysqli_query($connect,"insert into member(firstname,lastname,gender,address,contact,type,year_level,status) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level','$status')")or die("Query Failed -> ".mysqli_error($connect));?>
		<script>
            window.location="member.php";
		</script>
        <?php
    }
?>