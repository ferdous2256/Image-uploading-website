<?php session_start();
      $con = mysqli_connect('localhost', 'root' );

      $db = mysqli_select_db($con, 'project');
      $a = $_SESSION['Name'];
      $b = $_SESSION['Id']
?>
<!DOCTYPE html>

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Photo Stock</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="css/foundation.css" />
      <script src="js/vendor/jquery.js"></script>
      <script src="js/vendor/modernizr.js"></script>
   </head>
   <body>
      <nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name">
               <h1><a>Photo Stock</a></h1>
            </li>

            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
         </ul>
         <section class="top-bar-section">

            <ul class="right">
               <li class="divider"></li>
               <li><a href="index.php">Home</a></li>
               <li class="divider"></li>
               <li class="divider"></li>
               <li><a href="upload-photo.php" data-reveal-id="uploadModal" data-reveal-ajax="true">Add Photo</a></li>
               <li class="divider"></li>
                <li class="divider"></li>
               <li><a href=""><?php echo "$a"; ?></a></li>
               <li class="divider"></li>
               <li class="divider"></li>
               <li><a href="logout.php">Logout</a></li>
               <li class="divider"></li>
			   
            </ul>
         </section>
      </nav>
      <br/>
      <div class="row">
         <div class="large-12 columns">
            <h1>Photo Stock. </h1>
            TO FIND YOUR DESIRE PHOTO
            <?php
            if(isset($_GET['success'])) {
            if($_GET['success']=="yes"){?>
            <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box success radius ">
                     Image "<?= $_GET['title']; ?>" uploaded successfully.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } else {?>
             <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box alert radius ">
                     There was a problem uploading the image.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } }?>
            <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
               <?php
               
               $sql = " SELECT * FROM tbl_photos WHERE user_id= '$b' ORDER by img_id ASC ";
               $query = mysqli_query($con,$sql);
               $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

               foreach ($query as $img) {
               ?>
               <li>
                  <a href="<?= $img['img_path']; ?>" >
                  <img data-caption="<?= $img['img_title']; ?>" src="<?= $img['img_path']; ?>"></a>
                  <!-- <a href="<?php //if($row == 1) echo "$row['img_path']"; ?>">Download File</a> -->
               </li>
               <?php } ?>
            </ul>
         </div>
      </div>

      <div id="uploadModal" class="reveal-modal tiny" data-reveal></div>

      <div id="footer">
         <hr/>
         <div class="row">
            <div class="large-6 columns" style="margin-top: -15px;">
               &copy; Cse-480_Md Ferdous
            </div>
         </div>
      </div>
      </div>
      <script src="js/foundation.min.js"></script>
      <script src="js/sticky-footer.js"></script>
      <script src="js/foundation/foundation.topbar.js"></script>
      <script src="js/foundation/foundation.reveal.js"></script>
      <script src="js/foundation/foundation.abide.js"></script>
      <script>
         $(document).foundation();
      </script>
   </body>
</html>
