<?php require_once('includes/header.php');?>


    <?php require_once('includes/nav.php'); ?>

<?php if (logged_in()){

  $Email = $_SESSION['Email'];
  $target_dir = "./uploads/";
  $fileName = ($_FILES["fileToUpload"]["name"]);
  $target_file = $target_dir . $fileName;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $Errors=[];
  global $con; 


  clearstatcache();



  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) ) {
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check === true) {
      $input = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
      if(preg_match('/(<\?php\s',$input)){
        $Errors []= "File is not an image.";
        $uploadOk = 0;
      } else {
        $input = str_replace(chr(0),'',$input);
      }
  }
  } 

  // //Check if Item Name and Deciption is empty
  //  if(empty($ItemName) || empty($ItemDesc)) {
  //    $Errors [] = "Please fill in the blanks"
  //    //$uploadOk = 0;
  //  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $Errors []= "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    $Errors []= "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" && $imageFileType != "img" ) {
    $Errors []=  "Please choose a file of the following type: JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
  }

  if(!empty($Errors))
    {
      foreach($Errors as $display)
        {
          echo Error_Display($display);
        }
    }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $Errors []= "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }  else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          $ItemName = $_POST['ItemN'];
          $ItemDesc = $_POST['ItemD'];
          $Contact = $_POST['contactMethod'];
          echo '<div class="alert alert-success"> "Thank you for uploading the item for evaluation. We will get back to you shortly!" </div>';
          $sql = "UPDATE users SET file_name='$fileName' WHERE Email = $Email";
          addItem($ItemName,$ItemDesc,$Contact, $Email);
          mysqli_query($con, $sql);
          echo $con->error; 

          //"UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1"
          //$insert = $con->query ("INSERT into users (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
          //$query = "INSERT into users (file_name,uploaded_on) VALUES ('$fileName', NOW())";
          //mysqli_query($con, $query);
          //$insert = $db->query(" INSERT into users (file_name, uploaded_on) VALUES ('$fileName', NOW()) ");
          }
      else {
      $Errors []=  "Sorry, there was an error uploading your file.";
      }
  }
}
else{
  header("location:login.php");
} ?>    


<?php require_once('includes/footer.php'); ?>