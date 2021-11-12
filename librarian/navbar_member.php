<div class="navbar navbar-fixed-top nav-wrapper">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="dashboard.php"></i>&nbsp;Home</a></li>
					<li><a href="users.php"></i>&nbsp;Users</a></li>
					<li><a href="borrow.php">&nbsp;Lend Books </a></li>
					<li><a href="return.php">&nbsp;View Returned Books </a></li>
					<li><a href="view_borrow.php">&nbsp;View Lent Books </a></li>
					<li><a href="books.php">&nbsp;Books</a></li>
					<li class="active"><a href="member.php"></i>&nbsp;Members</a></li>
				</ul>
				<div class="pull-right">
					<div class="admin"><a href="#logout" data-toggle="modal"></i>&nbsp;Logout</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('search_form.php'); ?>