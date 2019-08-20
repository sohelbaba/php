<?php

if(isset($_POST['uploadBtn']) && $_POST['uploadBtn']) 
{
  // get details of the uploaded file
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));

$uploadFileDir = '../uploaded_files/';
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($fileTmpPath, $dest_path))
{
  echo "File is successfully uploaded ";
}
else
{
  $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
}
}

?>