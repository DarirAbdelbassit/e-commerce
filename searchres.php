<?php

session_start();

if (isset($_SESSION['username'])) {
    $login = "<i class=\"fas fa-sign-out-alt\" ></i>";
    $loglink = "logout.php";
    $signup = "<i class=\"fa fa-user\"></i>";
    $siglink = "Profile.php";
} else {
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
    <link rel="stylesheet" href="./css/profile.css" />
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
                        <a href="<?php echo $siglink; ?>" class="nav-link"><?php echo $signup; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $loglink; ?>" class="nav-link"><?php echo $login; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i><span>
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                } ?>
                        </a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Nav Bar-->
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>le resultat de votre recherche</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">

            <div class="row">
                <?php

                include('config.php');
                @$searchkey = $_POST['search'];
                $darir = "SELECT * FROM produit WHERE Pname LIKE '%$searchkey%'";
                $record = mysqli_query($conn, $darir);
                while ($row = mysqli_fetch_array($record)) {
                    $check_page = $row['Pcategorie'];
                    $you = 19;
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
            <small><s class="text-secondary">$' . ($row['Pprice'] + $you) . '</s></small>
            <span> <h6>$' . $row['Pprice'] . '</h6></span>   </h5>
           

            
            </div>
            </div>
  </form>
          </div>
            ';
                }
                echo '<div class="text-center alert alert-danger"><h1>le produit n\'existe pas</h1</div>';
                ?>
            </div>

        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- end product section -->
    <?php include('./footer.php'); ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>