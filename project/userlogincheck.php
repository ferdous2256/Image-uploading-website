<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'project');

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$sql = " select * from  user where Email='$email' and Password='$password' ";
	$query = mysqli_query($con,$sql);

	$sql2 ="select Id from user where Email='$email' and Password='$password'";
	$result2=mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

	$sql3 ="select Name from user where Email='$email' and Password='$password'";
	$result3=mysqli_query($con,$sql3);
    $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['Email'] = $email;
			$_SESSION['Name'] = $row3['Name'];
			$_SESSION['Id'] = $row2['Id'];

			header('location:index.php');
		}else{
			echo "login failed";
			header('location:userlogin.php');
		}

}


?>
