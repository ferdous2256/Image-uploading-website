<?php
session_start();
$con = mysqli_connect('localhost', 'root' );

$db = mysqli_select_db($con, 'project');
$b = $_SESSION['Id'];
if (isset($_POST['btn_upload']))
  {
    $filetmp   = $_FILES["file_img"]["tmp_name"];
    $filename  = $_FILES["file_img"]["name"];
    $filetype  = $_FILES["file_img"]["type"];
    $filepath  = "img/" . $filename;
    $filetitle = $_POST['img_title'];
    $filetype = $_POST['type'];

    
    move_uploaded_file($filetmp, $filepath);

    $sql = "INSERT INTO tbl_photos (user_id, img_name, img_type, img_path, img_title, Type) VALUES ($b, '$filename','$filetype', '$filepath', '$filetitle', '$filetype')";
    // $query = mysqli_query($con, $sql)
    if (mysqli_query($con, $sql))
      {
        header('Location: index.php?success=yes&title=' . $filetitle);
      }
    else
      {
        header('Location: index.php?success=no');
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Photo</title>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" data-abide>
	<div class="photo-field">
	<input type="file" name="file_img" pattern="^.+?\.(jpg|JPG|png|PNG)$" required>
	<small class="error">Upload JPG or PNG only.</small>
	</div>
	<div class="title-field">
	<input type="text" name="img_title" placeholder="Image title" required>
	<small class="error">Image title is required.</small>
	</div>
  <div class="title-field">
  <select name="type">
            <option>Nature</option>
            <option>Car</option>
            <option>Person</option>
            <option>Tech</option>
            <option>Animal</option>
            <option>Movies</option>
          </select>
  <small class="error">Type.</small>
  </div>
	<input type="submit" value="Upload Image" name="btn_upload" class="button">
	</form>
</body>
<a class="close-reveal-modal">&#215;</a>
</html>