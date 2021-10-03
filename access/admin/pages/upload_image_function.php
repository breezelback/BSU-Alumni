<?php
//upload.php
$connect = new PDO('mysql:host=localhost;dbname=bsu_alumni', 'root', '');
if(count($_FILES["file"]["name"]) > 0)
{
$today = date("Y-m-d");
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
  if(file_already_uploaded($file_name, $connect))
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }
  $location = './../gallery/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO gallery (image_name, date_posted) 
   VALUES ('".$file_name."',  '".$today."')
   ";
   $statement = $connect->prepare($query);
   $statement->execute();
  }
 }
}

function file_already_uploaded($file_name, $connect)
{
 
 $query = "SELECT * FROM gallery WHERE image_name='".$file_name."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $number_of_rows = $statement->rowCount();
 if($number_of_rows > 0)
 {
  return true;
 }
 else
 {
  return false;
 }
}

?>