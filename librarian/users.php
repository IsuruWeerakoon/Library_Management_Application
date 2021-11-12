<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_user.php'); ?>
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
						<strong style="font-family: 'Arial Black', arial-black;font-size: 20px;"><i class="icon-user icon-large"></i>&nbsp;&nbsp;Librarian Account Details</strong>
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
					<p><a href="#add_user" class="btn btn-info" data-toggle="modal">&nbsp;Register a new Librarian </a></p>
                    <?php include('modal_add_user.php'); ?>
				</div>
				<div class="span12">
					<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
						<thead>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
                        <?php $user_query=mysqli_query($connect,"select * from users")or die("Query Failed -> ".mysqli_error($connect));
                            while($row=mysqli_fetch_array($user_query)){
                                $id=$row['user_id']; ?>
								<tr class="del<?php echo $id ?>">
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['password']; ?></td>
									<td><?php echo $row['firstname']; ?></td>
									<td><?php echo $row['lastname']; ?></td>
									<td width="100">
										<div class="span2">
											<a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <?php include('delete_user_modal.php'); ?>
											<div class="span1">
												<a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-warning">   <i class="icon-edit icon-large"></i></a>
                                                <?php include('modal_edit_user.php'); ?>
											</div></div>
									</td>
                                    <?php include('toolttip_edit_delete.php'); ?>
								</tr>
                            <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</br></br></br></br></br></br></br></br></br></br></br></br>
<?php include('footer.php') ?>