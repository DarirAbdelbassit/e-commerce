<?php
 $id=$_GET['ID'];
 include 'config.php';
 mysqli_query($conn,"DELETE FROM `promo` WHERE id=$id");
 header("location:saiserP.php");
 
 ?>