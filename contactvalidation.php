<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ocbp";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	if(isset($_POST['submit']))
	{
//$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="insert into contact(fname,lname,email,message) values('$fname','$lname','$email','$message')";

$res=mysqli_query($conn,$sql);
if($res){
  header("refresh: 5; url=Contact-Us.php");
  echo "<p align=center>We have recieved your query!!</p> ";
  echo "<p align=center>We will get back to you ASAP</p> ";
  echo "<p align=center>You are now being redirected to previous page</p>";
}
else
{ 
  header("refresh: 5; url=Contact-Us.php");
  echo "<p align=center>Oops..look like there something went wrong!</p> ";
  echo "<p align=center>Try again..</p> ";
}
  }
}
?>