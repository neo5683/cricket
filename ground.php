<?php
$server="localhost";
$user="root";
$pass="";
$db="cricket";
$conn=mysqli_connect($server,$user,$pass,$db);
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$usertype=$_POST['usertype'];
$purpose=$_POST['purpose'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$sql="insert into ground values ('$name', '$email','$phone', '$usertype','$purpose', '$sdate','$edate')";
$result= mysqli_query($conn,$sql);
if($result){
  header('Location:index.html');
}
else {
  echo "Not Submitted";
}

?>
