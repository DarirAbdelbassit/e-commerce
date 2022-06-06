<?php 
include 'config.php';

session_start();

if (isset($_SESSION['username'])) {
  $login = "<i class=\"fas fa-sign-out-alt\" ></i>";
  $loglink = "logout.php";
  $signup = "<i class=\"fa fa-user\"></i>";
  $siglink = "Profile.php";
}else{
  $login = "connexion";
  $loglink = "login.php";
  $signup = "inscription";
  $siglink = "register.php";
}

   $user = $_SESSION['username'];
   $select = "SELECT * FROM users WHERE username= '$user' ";
   $result = mysqli_query($conn, $select);
   $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/profile.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/css2.css" />
    <title>store</title>
  </head>
  <body>
    <!--Nav Bar-->
    <div class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <div class="container">
        <a href="index.php" class="logo"
          ><span style="color: #f7941d">DARIRSETTAF </span>STORE</a
        >
        <buttond
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#forcola"
        >
          <span class="navbar-toggler-icon"></span>
        </buttond>
        <div class="collapse navbar-collapse" id="forcola">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link" >Home</a>
            </li>
            <li class="nav-item">
              <a href="store.php" class="nav-link">Store</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link">Cart</a>
            </li>
            <li class="nav-item">
              <a href="checkout.php" class="nav-link">Checkout</a>
            </li>
            <li class="nav-item">
              <a href="FAQ.php" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
              <a href="contacter.php" class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
            <a href="<?php echo $siglink;?>" class="nav-link" id="active"><?php echo $signup;?></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo $loglink;?>" class="nav-link"><?php echo $login;?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--End Nav Bar-->
    <div class="container rounded bg-white mt-5 mb-5 ">
    <div class="row">
        <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="./img/profile.jpg"></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
  <div class="row mt-3">
      <div class="col-md-12">
            <form  method="POST">
          <label class="labels">Username :</label>
          <input  class="form-control" type="text" name="username"value="<?php echo $row['username'];?>" required> 
<br>
<label class="labels">Email : </label>
<input  class="form-control" type="email" name="email" value="<?php echo $row['email'];?>" required> 

<br>
<label class="labels">Phone Number : </label>
<input  class="form-control" type="text" name="phone" placeholder="Not set" value="" required> 
<br>
<label class="labels">Address : </label>
<input class="form-control" type="text" name="address" placeholder="Not set" value="" required> 
<div class="mt-5 text-center"><button class="profile-butto" type="button" name="edit"><a href="./profile.php">Save Changes</a></button>
          </div>
        </form>
        </div>
  </body>
</html>
<?php
       if(isset($_POST['edit'])){  
         echo"on the rowd";
            $username = htmlspecialchars($_POST['username']);
            $upemail = htmlspecialchars($_POST['email']);
            // $password = md5($_POST['password']);
            // $newpassword = md5($_POST['newpassword']);
            // $confirmnewpassword = md5($_POST['confirmnewpassword']);
        	
    // if($password == $row["password"]) {
    //         if($newpassword == $confirmnewpassword ){
$update = "UPDATE `users` SET username = '$username' ,email = '$upemail'  WHERE username = '$user'";
$res = mysqli_query($conn, $update); 
        if ($res) 
        header("location:index.php");
        else
        echo'Something wrong';
        }
        
        //     }
        // } 
?>