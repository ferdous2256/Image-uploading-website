<?php 
	session_start();
  $con = mysqli_connect('localhost','root','','project');
  if(isset($_POST['btn']))
{ 
	$nature = $_POST['nature'];
	$car = $_POST['car'];
	$person = $_POST['person'];
	$tech = $_POST['tech'];
	$animal = $_POST['animal'];
	$movies = $_POST['movies'];
	$id = $_SESSION['Id'];

	$sql = "INSERT INTO pref (Nature, Car, Person, Tech, Animal, Movies, user_id) 
	 VALUES ('$nature','$car', '$person', '$tech', '$animal', '$movies', '$id')";
	 if (mysqli_query($con, $sql)) {

		header('location:index.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 } 
	 else {
	 	mysqli_error($con);
	 }
	 mysqli_close($con);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		choose
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?>
</head>
<body>
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
		<div class="heading text-center mb-1 text-uppercase text-white"> Choose Your preferances</div>
		<form action="" method="POST">
			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox" value="Nature" name="nature" checked>
  			<label class="form-check-label" >Nature
  			</label></div><br>
  			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox" value="car" name="car">
  			<label class="form-check-label" >Car
  			</label></div><br>
  			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox" value="Person" name="person">
  			<label class="form-check-label" >Person
  			</label></div><br>
  			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox"value="Tech" name="tech">
  			<label class="form-check-label" >Tech
  			</label></div><br>
  			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox" value="Animal" name="animal">
  			<label class="form-check-label" >Animal
  			</label></div><br>
  			<div class="form-check form-switch">
  			<input class="form-check-input" type="checkbox"value="movie" name="movies">
  			<label class="form-check-label" >Movies
  			</label></div><br>
			<input type="submit" autocomplete="off" name= "btn" value="submit" >
						
				</form>
			</div>
		</div>
	</div>
</header>

</body>
</html>
</body>
</html>