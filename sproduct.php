<?php 

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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slide.css" />
    <link rel="stylesheet" href="./css/flex.css" />
    <link rel="stylesheet" href="./css/contacte.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/css2.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>sproduct</title>
</head>

<body>
    <!--Nav Bar-->
    <div class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <div class="container">
            <a href="index.php" class="logo"><span style="color: #f7941d">DARIRSETTAF </span>STORE</a>
            <buttond class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#forcola">
                <span class="navbar-toggler-icon"></span>
            </buttond>
            <div class="collapse navbar-collapse" id="forcola">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="store.php" class="nav-link" id="active">boutique</a>
                    </li>
                    <li class="nav-item">
                        <a href="FAQ.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacter.php" class="nav-link">contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $siglink;?>" class="nav-link"><?php echo $signup;?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $loglink;?>" class="nav-link"><?php echo $login;?></a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Nav Bar-->
    <?php
   if(isset($_POST['acheter'])){

      $name = htmlspecialchars($_POST['Pname']);
      $price = htmlspecialchars($_POST['Pprice']);
      $description = htmlspecialchars($_POST['Pdescription']);
       $id=htmlspecialchars($_POST['Pid']);
       $conn=mysqli_connect('localhost','root','','ecommerce');
      $record=mysqli_query($conn,"SELECT * FROM produit where Id='$id' ");
   
$plus = 19;
    while($row=mysqli_fetch_array($record)){
       
       echo '
       <form action="cart.php" method="POST">
       <div class="container produit my-5 pt-5">
       
       <div class="row mt-1">
       <div class="col-lg-5 col-md-12 col-12">
       
       
       <img class="img-fluid w-100" src="./admin/'.$row['Pimage'].'" alt="" />
       </div>
       <div class="col-lg-6 col-md-12 col-12">
       
       <h2 class="py-4" style="text-transform: capitalize;">'.$name.'</h2>
       <h5><s>$'.($price + $plus).'</s></h5>
       <h3 class="py-3">$'.$price.'</h3>
       
       <h4 class="mt-5 mb-5" style="  margin: 40px 0;
       display: flex;
       align-items: center;
       justify-content: center;
       padding: 12px;
       background-color: #f7941d;
       border: 1px solid #f7941d;
       color: #ffffff;
       transition: all 0.3s;
       font-weight: 700;
       text-decoration: none;">Product Details</h4>
       <span
       >'.$description.'</span
       >
       
       <input type="hidden" value ="'.$name.'" name="Pname">
       <input type="hidden" value ="'.$price.'" name="Pprice">
       </div>
       </div>
       </div>
       </form>
       
       ';
     
     
    
      }}
    
      ?>
    <!-- Pour qoui nos  -->
    <div class="about py-2">
        <div class="section-header">
            <h2 class="section-title">Pour Quoi Notre Store?</h2>
            <span class="line"></span>
        </div>
    </div>

    <section class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="./img/shipping/shipping1.png" alt="" />
                        </div>
                        <div class="shipping_content">
                            <h2>Livraison chez vous</h2>
                            <p>Livraison gratuite Livraison gratuite sur toutes les commandes</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="./img/shipping/shipping2.png" alt="" />
                        </div>
                        <div class="shipping_content">
                            <h2>Contactez-nous 24/7</h2>
                            <p>Contactez-nous 24 heures sur 24</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="./img/shipping/shipping3.png" alt="" />
                        </div>
                        <div class="shipping_content">
                            <h2>100% remboursement </h2>
                            <p>Garantie 100% satisfait ou remboursé</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="./img/shipping/shipping4.png" alt="" />
                        </div>
                        <div class="shipping_content">
                            <h2>paiement sécurisé</h2>
                            <p>Nous garantissons un paiement sécurisé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about pd-y1">
        <div class="section-header">
            <h2 class="section-title">nos produits</h2>
            <span class="line"></span>
        </div>
    </div>
    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="row">
                <?php 
    $conn=mysqli_connect('localhost','root','','ecommerce');
    $record=mysqli_query($conn,"SELECT * FROM produit ");
    while($row=mysqli_fetch_array($record)){
      $check_page=$row['Pcategorie'];
      $you = 10;
      if($check_page==='Home'){
        echo '
        <div class="col-sm-6 col-md-4 col-lg-4"> 
        <div class="box">
        <div class="option_container">
        <div class="options">
    <form action="sproduct.php" method="POST">
        <input type="hidden" value ="' . $row['Id'] . '" name="Pid">
        <input type="hidden" value ="' . $row['Pname'] . '" name="Pname">
        <input type="hidden" value ="' . $row['Pprice'] . '" name="Pprice">
        <input type="hidden" value ="' . $row['Pdescription'] . '" name="Pdescription">
        <button id="option1" class="btn btn-dark my-3 " type="submit" name="acheter">Acheter</button>
    </form>
        <form action="addCart.php" method="POST">
       
        
            <button id="option1"class="btn btn-warning my-3"type="submit" name="PaddCart">Carte<i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" value ="' . $row['Pname'] . '" name="Pname">
            <input type="hidden" value ="' . $row['Pprice'] . '" name="Pprice">
            <input type="hidden" value ="' . $row['Id'] . '" name="Id">
           
            </div>
            </div>
            <div class="img-box">
            <img src="./admin/' . $row['Pimage'] . '" />
            </div>
            <div class="detail-box">
            <h6>' . $row['Pname'] . '</h6>

            <h5>
            <small><s class="text-secondary">$' .($row['Pprice'] + $you). '</s></small>
            <span> <h6>$' . $row['Pprice'] . '</h6></span>   </h5>
           

            
            </div>
            </div>
  </form>
          </div>
            ';
    }}?>


            </div>
        </div>
        <div class="box1bt">
            <a href="store.php">Voir toutes</a>
        </div>
        </div>
    </section>
    <?php include('./footer.php');?>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>