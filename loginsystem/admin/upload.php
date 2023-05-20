<?php session_start();
require_once('../includes/config.php');
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    echo "<script>alert('File is an image - ');</script>";
    $uploadOk = 1;
  } else {
    // echo "File is not an image.";
    echo "<script>alert('File is not an image.');</script>";
    echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  // echo "Sorry, file already exists.";
  echo "<script>alert('Sorry, file already exists.');</script>";
  echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  // echo "Sorry, your file is too large.";
  echo "<script>alert('Sorry, your file is too large.');</script>";
  echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
  echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // echo "Sorry, your file was not uploaded.";
  echo "<script>alert('Sorry, your file was not uploaded.');</script>";
  echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
// if everything is ok, try to upload file
} else {
  $id=$_SESSION['adminid'];
  $filename = $_FILES["fileToUpload"]["name"];
  // $sql = "UPDATE INTO users (img) VALUES ('$filename')";
  $sql = "update admin set img='$filename' where id='$id'";

  mysqli_query($con, $sql);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo "<script>alert('Image Uploaded Successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'admin-profile.php'; </script>";
  } else {
    // echo "Sorry, there was an error uploading your file.";
    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  }
}
?>