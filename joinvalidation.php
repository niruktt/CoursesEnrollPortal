<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="ocbp";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
if(isset($_POST['submit'])){
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $phoneno= $_POST['phoneno'];
  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc = $_FILES['file']['tmp_name'];
  $file_store = "resume/".$file_name;

  move_uploaded_file($file_tem_loc, $file_store);


  $sql = " insert into joinus(fname,lname,email,phoneno,file) values('$fname','$lname','$email','$phoneno','$file_name')";

  $res=mysqli_query($conn,$sql);
  if($res){
    header("refresh: 5; url=join-us.php");
  echo "<p align=center>Thanks for uploading your resume details..</p> ";
  echo "<p align=center>We will get back to you ASAP &#128512</p>";
  echo "<p align=center>You are now being redirected to previous page</p>";

  }
  else
  { 
    header("refresh: 5; url=join-us.php");
    echo "<p align=center>Oops..look like there something went wrong!</p> ";
    echo "<p align=center>Try again..</p> ";


  }
}
}
?>
