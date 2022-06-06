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
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/css2.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <title>store</title>
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
                        <a href="index.php" class="nav-link" id="active">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="store.php" class="nav-link">boutique</a>
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
                        <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i><span>
                                <?php 
             if(isset($_SESSION['cart'] )){
               $count = count($_SESSION['cart']);
               echo"<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
             }else{
              echo"<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
             }?>
                        </a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Nav Bar-->
    <div style="background-color:rgb(212,206,208);position:sticky;">
<div style="width:300px;left: 1031px;
position: relative;">
<form action="searchres.php" method="POST"> 
    <div class="container p-2"> 
<input class="form-control" type="text" name="search" placeholder="Chercher un produit...">
</div>
</form> 
</div>
</div>
    <!-- slider section -->
    <section class="slider_section">
        <div class="slider_bg_box">
            <img src="./img/slider-bg.png" alt="" />
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-6">
                                <div class="detail-box">
                                    <h1>
                                        <span class="auto-input">Bienvenue</span>
                                        <div class="Two my-3">À DARIRSETTAF</div>
                                    </h1>
                                    <p>
                                        Vous recherchez des produits électroniques ? Vous êtes au bon endroit, vous
                                        trouverez ici des produits de haute qualité à un prix raisonnable. Notre magasin
                                        vous offre toujours des offres continues .
                                    </p>
                                    <div class="btn-box">
                                        <a href="store.php" class="btn1"> Magasinez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->

    <!-- Pour qoui nos  -->
    <div class="about pd-y">
        <div class="section-header">
            <h2 class="section-title">Pour Quoi Notre Store?</h2>
            <span class="line"></span>
        </div>
    </div>
    <!-- fin Pour qoui nos  -->
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
    <!-- Notre produits  -->
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
      $you = 19;
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
        <button id="option1" class="btn btn-dark my-3 " type="submit" name="acheter">Détail <i class="fas fa-info"></i></button>
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
            <h5>' . $row['Pname'] . '</h5>

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
    <!-- end product section -->

    <!-- fin Notre produits  -->
    <!-- Start Shop Newsletter  -->
    <!--<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="#" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section> -->
    <!-- End Shop Newsletter -->
    <?php include('./footer.php');?>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    let dar = "ⴰⵣⵓⵍ"
    var typed = new Typed(".auto-input", {

        strings: ["Bienvenue","أهلا بك", "Welcome", "Holla", dar, "欢迎"],
        typespeed: 100,
        backSpeed: 120,
        loop: true
    })
    </script>
</body>

</html>