<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
</head>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-1 text-uppercase text-white"> Sign up </div>
		<div class="container row d-flex flex-row justify-content-center mb-1">
			<div class="admin-form shadow p-2 ">
					<form action="signupprocess.php" method="POST">

						<div class="form-group">
							<label>Add Name</label>
							<input type="text" name="name" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Number</label>
							<input type="text" name="number" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="email" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="password" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" autocomplete="off" name= "save" value="submit" >
						
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>