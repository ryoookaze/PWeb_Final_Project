<?php
if (isset($_POST['submit']))
{
  $file = $_FILES['file'];
  $fileName = $_FILE['file']['name'];
  $fileTmpName = $_FILE['file']['tmp_name'];
  $fileSize = $_FILE['file']['size'];
  $fileError = $_FILE['file']['error'];
  $fileType = $_FILE['file']['type'];

  $fileExtention = explode('.', $fileName);
  $fileActualExtention = strtolower(end($fileExtention));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExtention, $allowed)) {
    if($fileError === 0) {
      if($fileSize < 100000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExtention;
        $fileDestination = 'uploaded/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        header("Location: profileedit.php?uploadsuccess");
      } else {
        echo "Excessive file size";
      }
    } else {
      echo "Error Uploading";
    }
  }
  else {
    echo "You can't upload this file";
  }
}
 ?>
