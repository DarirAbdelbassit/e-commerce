<?php 
session_start();

$conn =  mysqli_connect('localhost','root','','ecommerce');
if(isset($_SESSION['username'])){

if(isset($_POST['btn-send'])){
    $userName = htmlspecialchars($_POST['UName']);
    $Email = htmlspecialchars($_POST['Email']);
    $Subject = htmlspecialchars($_POST['Subject']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $Mesg = htmlspecialchars($_POST['msg']);
if(empty($userName) || empty($Email) || empty($phonenumber) || empty($Mesg)|| empty($Subject)   ){
    header("location:contacter.php?error");
    }
else{
       $sql = "INSERT INTO `contact_us` (`User_name`, `email`, `phone`, `message`, `subject`) VALUES ('$userName','$Email', '$phonenumber',' $Mesg','$Subject')";
    $res=mysqli_query($conn, $sql);
          if($res){ 
                header("location:contacter.php?success");
        }
            else {
                echo'<h1>Something not working</h1>';
            }
}
}
  }
  else{
    header("location:contacter.php?signup");
  }

?>


