<?php 
  session_start();
  if(!$_SESSION['username']){
    header("location:../../index.php");
  }
include 'config.php';
$sel=mysqli_query($conn,"SELECT * FROM `users` WHERE usertype <> 'administrateur'");
$contact=mysqli_query($conn,"SELECT * FROM `contact_us`");
$promo=mysqli_query($conn,"SELECT * FROM `promo`");
$produit=mysqli_query($conn,"SELECT * FROM `produit`");



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/see.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>
<body >
    <div class="header">
          <span >
            Hello <?php echo $_SESSION['username'] ;?>
          </span>
    </div>
<?php include 'dashboard.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-3 m-auto text-center rounded-pill" style="background-color:#f7941d">
                <h1 style="color:white">les utilisateurs</h1>
                <div class=" px-5 fs-5 fw-bold "><h3><?php echo mysqli_num_rows($sel); ?></h3></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-3 m-auto text-center rounded-pill" style="background-color:#f7941d">
                <h1 style="color:white">Les Message Des clients</h1>
                <div class=" px-5 fs-5 fw-bold "><h3><?php echo mysqli_num_rows($contact); ?></h3></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-3 m-auto text-center rounded-pill" style="background-color:#f7941d">
                <h1 style="color:white">Nomber des promos</h1>
                <div class=" px-5 fs-5 fw-bold "><h3><?php echo mysqli_num_rows($promo); ?></h3></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 my-3 m-auto text-center rounded-pill" style="background-color:#f7941d">
                <h1 style="color:white">Nomber des Produits</h1>
                <div class=" px-5 fs-5 fw-bold "><h3><?php echo mysqli_num_rows($produit); ?></h3></div>
            </div>
        </div>
    </div>

    </body>

</html>