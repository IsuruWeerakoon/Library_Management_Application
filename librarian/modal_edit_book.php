<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-heading"><strong>Edit Book Details</strong></div>
        <?php
            $query = mysqli_query($connect,"select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$id'")or die("Query Failed -> ".mysqli_error($connect));
            $row=mysqli_fetch_array($query);
            $category_id = $row['category_id'];
        ?>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Book Title: </label>
				<div class="controls">
					<input type="text" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="Book Title" required>
					<input type="hidden" id="inputEmail" name="id" value="<?php echo $id;  ?>" placeholder="Book Title" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Category: </label>
				<div class="controls">
					<select name="category_id">
						<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
                        <?php $query1 = mysqli_query($connect,"select * from category where category_id != '$category_id'")or die("Query Failed -> ".mysqli_error($connect));
                            while($row1 = mysqli_fetch_array($query1)){
                                ?>
								<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
                            <?php } ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Author: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="author" value="<?php echo $row['author']; ?>" placeholder="Author" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">No: of Copies: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="book_copies" value="<?php echo $row['book_copies']; ?>" placeholder="No: of Copies:" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Year Published: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" placeholder="Year Published" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Publisher: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="book_pub" value="<?php echo $row['book_pub']; ?>" placeholder="Publisher" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">ISBN: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="ISBN" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Copyrighted Year: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="Copyrighted Year" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Status: </label>
				<div class="controls">
					<select name="status">
						<option><?php echo $row['status']; ?></option>
						<option>New</option>
						<option>Old</option>
						<option>Lost</option>
						<option>Damaged</option>
						<option>Pending for Replacement</option>
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
        $id = $_POST['id'];
        $book_title=$_POST['book_title'];
        $category_id=$_POST['category_id'];
        $author=$_POST['author'];
        $book_copies=$_POST['book_copies'];
        $book_pub=$_POST['book_pub'];
        $publisher_name=$_POST['publisher_name'];
        $isbn=$_POST['isbn'];
        $copyright_year=$_POST['copyright_year'];
        $status=$_POST['status'];
        mysqli_query($connect,"update book set book_title='$book_title',category_id='$category_id',author='$author'
,book_copies = '$book_copies',book_pub = '$book_pub',publisher_name = '$publisher_name',isbn = '$isbn',copyright_year='$copyright_year',status='$status' where book_id='$id'")or die("Query Failed -> ".mysqli_error($connect));
        ?>
		<script>
            window.location="books.php";
		</script>
        <?php
    }
?>