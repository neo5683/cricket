<?php
$server="localhost";
$user="root";
$pass="";
$db="cricket";
$conn=mysqli_connect($server,$user,$pass,$db);
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from registration where email='$email' and pass='$pass'";
$result= mysqli_query($conn,$sql);
$count=0;
while ($row=mysqli_fetch_assoc($result)) {

  // code...
  $count++;
}
if ($count==1) {
  // code...
  header('Location:index.html');
}
elseif ($count==0) {
  // code...
  echo "No user found";
}
 ?>
