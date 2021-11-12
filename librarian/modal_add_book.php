<div id="add_book" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-success"><strong>Register a new Book</strong></div>
		<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Book Title: </label>
				<div class="controls">
					<input type="text" id="inputEmail" name="book_title"  placeholder="Book Title" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Category: </label>
				<div class="controls">
					<select name="category_id">
						<option></option>
                        <?php
                            $cat_query = mysqli_query($connect,"select * from category");
                            while($cat_row = mysqli_fetch_array($cat_query)){
                                ?>
								<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
                            <?php  } ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Author: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="author"  placeholder="Author" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">No: of Copies:</label>
				<div class="controls">
					<input type="text" id="inputPassword" name="book_copies"  placeholder="No: of Copies" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Year Published: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="book_pub"  placeholder="Year Published" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Publisher: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="publisher_name"  placeholder="Publisher" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">ISBN: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="isbn"  placeholder="ISBN" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Copyrighted Year: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="copyright_year"  placeholder="Copyrighted Year" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Status: </label>
				<div class="controls">
					<input type="text" id="inputPassword" name="status"  placeholder="Status" value="New" readonly="readonly" required>
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
        $book_title=$_POST['book_title'];
        $category_id=$_POST['category_id'];
        $author=$_POST['author'];
        $book_copies=$_POST['book_copies'];
        $book_pub=$_POST['book_pub'];
        $publisher_name=$_POST['publisher_name'];
        $isbn=$_POST['isbn'];
        $copyright_year=$_POST['copyright_year'];
        $status=$_POST['status'];
        mysqli_query($connect,"insert into book (book_title,category_id,author,book_copies,book_pub,publisher_name,isbn,copyright_year,date_added,status)
 values('$book_title','$category_id','$author','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year',NOW(),'$status')")or die("Query Failed -> ".mysqli_error($connect));?>
		<script>
            window.location="books.php";
		</script>
        <?php
    }
?>