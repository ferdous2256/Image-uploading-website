
<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'project');

if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $number = $_POST['number'];
	 $email = $_POST['email'];
	 $pass = $_POST['password'];
	 $_SESSION['Name'] = $_POST['name'];


	 
	 
	 
	 $sql = "INSERT INTO user (Name, Number, Email, Password) 
	 VALUES ('$name','$number', '$email', '$pass')";
	 if (mysqli_query($conn, $sql)) {
        $sql2 ="select Id from user where Email='$email' and Password='$pass'";
	    $result2=mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
        $_SESSION['Id'] = $row2['Id'];
		header('location:choose.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>