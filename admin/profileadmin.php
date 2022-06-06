<?php 

include 'config.php';
session_start();

$user = $_SESSION['username'];
$select = "SELECT * FROM users WHERE username='$user'";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../css/style.css" />
    <link rel="stylesheet" href="./../css/profile.css" />
    <link rel="stylesheet" href="./../css/bootstrap.min.css" />
    <link rel="stylesheet" href="./../css/css2.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <title>store</title>
</head>

<body class="">
<div class="header ">
          <span >
            
            Hello <?php echo $_SESSION['username'] ;?>
          </span>
    </div>
    <div class="wrapper">
      <?php  include 'dashboard.php'?>
  <div style="margin-left:180px;">
<div class="container rounded bg-white  ">
        <div class="row">
            <div class="col-md-3 ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="./../img/profile.jpg"></span></div>
            </div>
            <div class="col-md-5 ">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form method="POST">
                                <label class="labels">Username :</label>
                                <input class="form-control" type="text" name="username"
                                    value="<?php echo $row['username'];?>" required readonly>
                                <br>
                                <label class="labels">Email : </label>
                                <input class="form-control" type="email" name="email"
                                    value="<?php echo $row['email'];?>" required readonly>
                                <br>
                                <label class="labels">Phone Number : </label>
                                <input class="form-control" type="text" name="phone" placeholder="Not set"
                                    value="0<?php echo $row['number'];?>" readonly>
                                <br>
 
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
</body>
</html>