<?php include('header.php'); ?>
<?php include('navbar_contact.php'); ?>
<div class="container">
	<div class="margin-top">
		<div class="row">
            <?php include('head.php'); ?>
			<div class="col-main">
				<div class="span12">

					<h3 style="text-align: center"><strong>Contact Us through Our Web Portal</strong></h3>

					<table width="450" style="margin: 0pt auto;border: lightgreen; border-radius: 20px;" border="2px">
						<tbody>
						<br>
						<td>
							<form class="form-horizontal" method="POST">

							<div class="control-group">

							</div>
							<div class="control-group">
								<label class="control-label" for="inputEmail">Name: </label>
								<div class="controls">
									<input type="text" id="inputEmail" name="firstname"  placeholder="Name" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Email Address: </label>
								<div class="controls">
									<input type="text" id="inputPassword" name="lastname"  placeholder="Email Address" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Contact Number: </label>
								<div class="controls">
									<input type="text" id="inputPassword" name="gender"  placeholder="Contact Number" required>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Message: </label>
								<div class="controls">
									<input type="text" id="inputPassword" name="address"  placeholder="Message" style="height: 75px" required>
								</div>
							</div>


							<div class="control-group">
								<div class="controls">
									<button name="submit" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
								</div>
							</div>
							</form>
						</td>
						</tbody>
					</table>
					<br>
					<table width="450" style="margin-right: auto;margin-left: auto">
						<tr >
							<th style="float: left"><b>General Inquiries</b></th>
							<th>&nbsp;</th>
							<th style="float: left"><b>Postal Address</b></th>
						</tr>
						<tr>
							<td>T.P. : +94 11 12784xx, +94 11 34552xx<br>
								+94 11 24551xx, +94 11 26748xx<br>
								Fax : +94 11 145852xx<br>
								info@mail.abc.lk
							</td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>No. 25,<br>
								High Level Road,<br>
								Colombo,<br>
								Sri Lanka.
							</td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
