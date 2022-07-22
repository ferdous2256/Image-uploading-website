<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


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
		<div class="heading text-center mb-5 text-uppercase text-white"> LOGIN PAGE </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="userlogincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="email" value="" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
						<a href="signup.php">create new account</a>

				 </form>
			</div>
		</div>
	</div>
</header>

</body>
</html>
