<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_books.php'); ?>
	<script type="text/javascript">
        function timedMsg(){
            var t=setInterval("change_time();",1000);
        }
        function change_time(){
            var d = new Date();
            var hour=d.getHours();
            var minute=d.getMinutes();
            var second=d.getSeconds();
            if(hour <10 ){hour='0'+hour;}
            if(minute <10 ) {minute='0' + minute; }
            if(second<10){second='0' + second;}
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
					<br>
					<div class="alert alert-success">
						<strong style="font-family: 'Arial Black', arial-black;font-size: 20px;"><i class="icon-book icon-large"></i>&nbsp;&nbsp;Details of Damaged Books</strong>
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
								<tr>
							</table>
						</div>
					</div>
					<ul class="nav nav-pills">
						<li><a href="books.php">All</a></li>
						<li><a href="new_books.php">New Books</a></li>
						<li><a href="old_books.php">Old Books</a></li>
						<li><a href="lost.php">Lost Books</a></li>
						<li class="active"><a href="damage.php">Damaged Books</a></li>
						<li><a href="sub_rep.php">Books Pending for Replacement</a></li>
					</ul>
					<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
						<div class="pull-right">
							<a href="" onclick="window.print()" class="btn-default"> Print</a>
						</div>
						<thead>
						<tr>
							<th>Reg. No:</th>
							<th>Book Title</th>
							<th>Category</th>
							<th>Author</th>
							<th class="action">No: of Copies</th>
							<th>Published Year</th>
							<th>Publisher</th>
							<th>ISBN</th>
							<th>Copyrighted Year</th>
							<th>Date Added</th>
							<th class="action">Action</th>
						</tr>
						</thead>
						<tbody>
                        <?php  $user_query = mysqli_query($connect,"select * from book where status = 'Damaged'")or die("Query Failed -> ".mysqli_error($connect));
                            while($row=mysqli_fetch_array($user_query)){
                                $id=$row['book_id'];
                                $cat_id=$row['category_id'];
                                $cat_query = mysqli_query($connect,"select * from category where category_id = '$cat_id'")or die("Query Failed -> ".mysqli_error($connect));
                                $cat_row = mysqli_fetch_array($cat_query);
                                ?>
								<tr class="del<?php echo $id ?>">
									<td><?php echo $row['book_id']; ?></td>
									<td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
									<td><?php echo $row['author']; ?> </td>
									<td class="action"><?php echo $row['book_copies']; ?> </td>
									<td><?php echo $row['book_pub']; ?></td>
									<td><?php echo $row['publisher_name']; ?></td>
									<td><?php echo $row['isbn']; ?></td>
									<td><?php echo $row['copyright_year']; ?></td>
									<td><?php echo $row['date_added']; ?></td>
                                    <?php include('toolttip_edit_delete.php'); ?>
									<td class="action">
										<div class="span2">
											<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <?php include('delete_book_modal.php'); ?>
											<div class="span1">
												<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-warning">   <i class="icon-edit icon-large"></i></a>
                                                <?php include('modal_edit_book.php'); ?>
											</div></div>
									</td>
								</tr>
                            <?php  }  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>