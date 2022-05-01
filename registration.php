<?php
$server="localhost";
$user="root";
$pass="";
$db="cricket";
$conn=mysqli_connect($server,$user,$pass,$db);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$usertype=$_POST['usertype'];
$sql="insert into registration  values ('$fname', '$lname','$email', '$phone','$dob', '$usertype')";
$result= mysqli_query($conn,$sql);
if($result){
  header('Location:index.html');
}
else {
  echo "Not Submitted";
}

?>
