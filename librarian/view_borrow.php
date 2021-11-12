<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_view_borrow.php'); ?>
	<script type="text/javascript">
        function timedMsg() {
            var t=setInterval("change_time();",1000);
        }
        function change_time() {
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
						<strong style="font-family: 'Arial Black', arial-black;font-size: 20px;"><i class="icon-book icon-large"></i>&nbsp;&nbsp;Details of Lent Books</strong>
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
					<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						<thead>
						<tr>
							<th>Book title</th>
							<th>Borrower</th>
							<th>Year Level</th>
							<th>Date Borrow</th>
							<th>Due Date</th>
							<th>Date Returned</th>
							<th>Borrow Status</th>
						</tr>
						</thead>
						<tbody>
                        <?php  $user_query = mysqli_query($connect,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								ORDER BY borrow.borrow_id DESC
								  ")or die("Query Failed -> ".mysqli_error($connect));
                            while($row=mysqli_fetch_array($user_query)){
                                $id=$row['borrow_id'];
                                $book_id=$row['book_id'];
                                $borrow_details_id=$row['borrow_details_id'];
                                ?>
								<tr class="del<?php echo $id ?>">
									<td><?php echo $row['book_title']; ?></td>
									<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
									<td><?php echo $row['year_level']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td>
									<td><?php echo $row['due_date']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
									<td><?php echo $row['borrow_status'];?></td>
									<td> <a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn-default">Return</a>
                                        <?php include('modal_return.php'); ?>
									<td></td>
								</tr>
                            <?php  }  ?>
						</tbody>
					</table>
				</div>
				<script>
                    $(".uniform_on").change(function(){
                        var max= 3;
                        if( $(".uniform_on:checked").length == max ){
                            $(".uniform_on").attr('disabled', 'disabled');
                            alert('3 Books are allowed per borrow');
                            $(".uniform_on:checked").removeAttr('disabled');
                        }else{
                            $(".uniform_on").removeAttr('disabled');
                        }
                    })
				</script>
			</div>
		</div>
	</div>
<?php include('footer.php') ?>