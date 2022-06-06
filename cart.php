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
    <link rel="stylesheet" href="./css/flex.css" />
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
                        <a href="store.php" class="nav-link">boutique</a>
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
                        <a href="cart.php" class="nav-link" id="active"><i class="fas fa-shopping-cart"></i><span>
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }
                                if (empty($_SESSION['cart'])) {
                                    echo ' <script>alert("votre panier est vide ! Veuillez le rempler");
                                    window.history.go(-1)                                    </script>';
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
                        <h3>Page du panier</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table text-center my-4">
                        <thead style="background-color:#f7941d;">
                            <th class="text-center">produit</th>
                            <th class="text-center">prix</th>
                            <th class="text-center">Quantité</th>
                            <th class="text-center">Total</th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                            <th class="text-center"></th>
                        </thead>
                    <tbody>
                            <?php
                            include 'config.php';
                            $stotal = 0;
                            $ftotal = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $stotal = $value['Pprice'] * $value['Pquantite'];
                                    $ftotal += $stotal;
                                    echo '
                <form action="addCart.php" method="POST">
                    <tr>
                    <td><input type="hidden" name="Pname" value="' . $value['Pname'] . '">' . $value['Pname'] . '</td>
                    <td><input type="hidden" name="Pprice" value="' . $value['Pprice'] . '">$' . $value['Pprice'] . '</td>
                    <td><input type="text" name="Pquantite" value="' . $value['Pquantite'] . '"></td>
                    <td>$' . $stotal . '</td>
                    <td><button class="btn btn-info" name="update"><i class="fas fa-pen"></i></button></td>
                    <td><button class="btn btn-secondary" name="delete"><i class="fa fa-trash"></i></button></td>
                    <td><input name="kra" type="hidden"  value="' . $value['Pname'] . '" ><td>
                    </tr>
                <form>
                    ';
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <center>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="left">
                                <h3 style="background-color:#f7941d;width:239px">Montant</h3>
                                <h3>$<?php echo number_format($ftotal, 2) ?></h3>
                                <?php $_SESSION['totale'] = number_format($ftotal, 2); ?>
                                <div class="box1bt">
                                    <a href="isclient.php">acheter maintenant</a>
                                </div>
                                <div class="box1bt">
                                    <a href="store.php">continuer mes achats</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>

        <style>
            .box1bt a {
                margin: 20px 0;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 10px;
                background-color: #333;
                width: 239px;
                color: #ffffff;
                transition: all 0.3s;
                font-weight: 600;
                text-decoration: none;
                font-size: 1.2em;
            }

            .box1bt a:hover {
                background-color: #f7941d;
                color: #ffffff;
            }
        </style>
        <?php include('./footer.php'); ?>

        <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>