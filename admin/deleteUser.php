<?php 
 $id=$_GET['ID'];
 $conn=mysqli_connect('localhost','root','','ecommerce');

$sql = "SELECT usertype FROM `users`";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);

   mysqli_query($conn,"DELETE FROM `users` WHERE id = $id");
   header("location:accountUser.php");
  


?>