<?php
 $id=$_GET['ID'];
 include 'config.php';
 mysqli_query($conn,"DELETE FROM `contact_us` WHERE Id=$id");
 header("location:contactUser.php");
 
 ?>