<div id="delete_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
        <?php
            $query = mysqli_query($connect,"select * from member where member_id='$id'")or die("Query Failed -> ".mysqli_error($connect));
            $row=mysqli_fetch_array($query);
        ?>
		<div class="alert alert-danger">Are you Sure you want to <strong>Cancel</strong> the membership of <br><strong><?php echo $row['firstname']." ".$row['lastname']; ?></strong> ? </div>
	</div>
	<div class="modal-footer">
		<a class="btn btn-danger" href="delete_member.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i> Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>