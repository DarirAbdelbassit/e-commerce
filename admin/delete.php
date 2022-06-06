<?php
 $id=$_GET['ID'];
 include 'config.php';
 mysqli_query($conn,"DELETE FROM `produit` WHERE Id=$id");
 header("location:index1.php");
 
 ?>