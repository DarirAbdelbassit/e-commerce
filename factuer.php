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
                        <a href="store.php" class="nav-link" >boutique</a>
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

    <section class="product_section layout_padding">
        <div class="container">

            <div class="row">
                <?php

                include('config.php');
               
                echo '<div class="text-center alert alert-success"><h1>Paiement est bien effectuer</h1</div>';
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
