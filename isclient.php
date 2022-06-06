<?php
session_start();

include 'config.php';
@$id=$_SESSION['client'];
$sql = "SELECT * FROM  users where id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		    $row = mysqli_fetch_assoc($result);
        if($row){
            header("location:checkout.php");
        }
    }
    else {
        header("location:register.php");
    } 

?>