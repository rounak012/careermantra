<?php
$connection=mysqli_connect("localhost","root","scherzinger","reg");
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$email=$_POST['email'];
$pid=md5($pid);
$query="INSERT INTO registration VALUES ('$uid','$pid','$email')";
$result=mysqli_query($connection,$query);
//echo "<pre>Debug: $query</pre>\m";
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($connection));
}
else {
  echo 'registered.';
  ?>
   <form action="login.php">
  <input type="submit" value="login">
  </form>
<?php
}


?>
