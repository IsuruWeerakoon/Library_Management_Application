<div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
        <?php
            $query = mysqli_query($connect,"select * from book where book_id='$id'")or die("Query Failed -> ".mysqli_error($connect));
            $row=mysqli_fetch_array($query);
        ?>
		<div class="alert alert-danger">Are you sure you want to <strong>Delete <?php echo $row['book_title']; ?></strong> details ?</div>
	</div>
	<div class="modal-footer">
		<a class="btn btn-danger" href="delete_books.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i> Yes</a>
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>