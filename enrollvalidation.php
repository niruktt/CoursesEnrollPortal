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
$fullname=$_POST['fullname'];
$phoneno=$_POST['phoneno'];
$emailaddress=$_POST['emailaddress'];
$course=$_POST['course'];

$sql="insert into enroll(fullname,phoneno,emailaddress,course) values('$fullname','$phoneno','$emailaddress','$course')";

$res=mysqli_query($conn,$sql);
if($res){
  header("refresh: 5; url=courses.php");
  echo "<p align=center>Thanks for enrolling into course using our platform!!</p> ";
  echo "<p align=center>We will get back to you ASAP</p> ";
  echo "<p align=center>You are now being redirected to previous page</p>";
}
else
{ 
 

}
  }
}
?>