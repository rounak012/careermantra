<?php
$connection=mysqli_connect("localhost","root","scherzinger","reg");
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
?>
