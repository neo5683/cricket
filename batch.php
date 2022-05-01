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
$batchtiming=$_POST['batchtiming'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$sql="insert into batch values ('$name', '$email','$phone','$usertype','$batchtiming','$sdate','$edate')";
$result= mysqli_query($conn,$sql);
if($result){
  header('Location:index.html');
}
else {
  echo "Not Submitted";
}

?>
