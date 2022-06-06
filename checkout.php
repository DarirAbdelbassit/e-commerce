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

try {
    $conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Erreur de connexion: ' . $e->getMessage();
}
@$name = htmlspecialchars($_POST['name']);
@$lastname = htmlspecialchars($_POST['lastname']);
@$email = htmlspecialchars($_POST['email']);
@$number = htmlspecialchars($_POST['number']);
@$country = htmlspecialchars($_POST['country']);
@$region = htmlspecialchars($_POST['region']);
@$adresse = htmlspecialchars($_POST['adresse']);
@$zip = htmlspecialchars($_POST['zip']);
@$codeP = htmlspecialchars($_POST['codeP']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/slide.css" />
    <link rel="stylesheet" href="./css/chechout.css" />
    <link rel="stylesheet" href="./css/contacte.css" />
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
                        <h3>page de paiement</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <h2>Faites votre paiement ici</h2>
                        <p>Veuillez vous inscrire afin de passer à la caisse plus rapidement</p>
                        <?php
                        if (isset($_POST['btn-checkout'])) {
                        ?>
                            <style>
                                .shop.checkout #myDIV {
                                    display: block;
                                }
                            </style>
                        <?php
                            if (isset($_SESSION['username'])) {
                                if (
                                    isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) &&
                                    isset($_POST['number']) && isset($_POST['country']) && isset($_POST['region']) &&
                                    isset($_POST['adresse']) && isset($_POST['zip'])
                                ) {
                                    $payment = $conn->prepare('INSERT INTO
                        checkout(firstname,lastname,emailadd,phone,country,region,addresse,zip)
                        VALUES(?,?,?,?,?,?,?,?)');
                                    $payment->execute(array($name, $lastname, $email, $number, $country, $region, $adresse, $zip));
                                }
                            } else {
                                echo '<div class="alert alert-danger">Créer Un Compte D\'abort</div>';
                            }
                        } ?>
                        <style>
                            .hidden {
                                display: hidden;
                            }
                        </style>
                        <!-- Form -->
                        <form class="form" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Prénom<span>*</span></label>
                                        <input type="text" name="name" placeholder="" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Nom<span>*</span></label>
                                        <input type="text" name="lastname" placeholder="" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Email Address<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Numéro de Téléphone<span>*</span></label>
                                        <input type="text" name="number" placeholder="" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Pays<span>*</span></label>
                                        <input type="text" name="country" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Region<span>*</span></label>
                                        <input type="text" name="region" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Ligne d'adresse<span>*</span></label>
                                        <input type="text" name="adresse" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Code Postal<span>*</span></label>
                                        <input type="text" name="zip" required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Code Promo</label>
                                        <input type="text" name="codeP" />
                                    </div>
                                </div>
                            </div>
                            <button id="btn_submit" name="btn-checkout">Envoyer</button>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- §§§§§§ Order Widget PHP §§§§§-->
                        <div class="forpyment">
                            <h2>TOTAL PANIER</h2>
                            <div class="content">
                                <ul>
                                    <h4>
                                        <?php
                                        $T = $_SESSION['totale'];
                                        $promo = $conn->prepare('SELECT * FROM promo');
                                        $promo->execute();
                                        while ($res = $promo->fetch()) {
                                            if ($codeP == $res['codeP']) {
                                                echo "<h5 class=\"alert alert-success\"><center><s>$" . $T . "</s></center></h5>";
                                                $pr = $res['percentage'] / 100;
                                                $T = $T * (1 - $pr);
                                            }
                                        }
                                        ?>
                                        <li class="last">Total<span>$<?php echo $T; ?></span></li>
                                    </h4>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->
                        <!-- for payment -->
                        <div id="myDIV" class="forpyment">
                            <h2>Payments</h2>
                            <div>
                                <div class="content my-5">
                                    <!-- Set up a container element for the button -->
                                    <div id="paypal-button-container">
                                        <!-- Include the PayPal JavaScript SDK -->
                                        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD">
                                        </script>
                                        <script>
                                            // Render the PayPal button into #paypal-button-container
                                            paypal.Buttons({
                                                createOrder: function(data, actions) {
                                                    return actions.order.create({
                                                        purchase_units: [{
                                                            amount: {
                                                                value: '<?php echo $T; ?>'
                                                            }
                                                        }]
                                                    });
                                                },
                                                onApprove: function(data, actions) {
                                                    return actions.order.capture().then(function(orderData) {
                                                        console.log('Capture result', orderData, JSON
                                                            .stringify(
                                                                orderData, null, 2));
                                                        var transaction = orderData.purchase_units[0]
                                                            .payments
                                                            .captures[0];
                                                        window.location.href = "factuer.php";
                                                    });
                                                }
                                            }).render('#paypal-button-container');
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <!--/ End for payment -->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/ End Checkout -->

    <?php include('./footer.php'); ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>