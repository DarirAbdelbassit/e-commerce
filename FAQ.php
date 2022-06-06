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
    <link rel="stylesheet" href="./css/faq.css" />
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
                        <a href="FAQ.php" class="nav-link" id="active">FAQ</a>
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
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Foire aux questions</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->

    <!--Star Questions-->

    <div class="box-faq">
        <div class="accordion">
            <div class="tab">
                <input type="checkbox" name="item1" id="item1" />
                <label for="item1"> Quels sont les délais de livraison ?</label>
                <div class="answer">
                    Toutes les commandes sont traitées en 48h par notre partenaire logistique.

                    Le temps de livraison dépend ensuite du transporteur et varie entre 24h et 4 jours ouvrés.
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" name="item3" id="item3" />
                <label for="item3">Comment puis-je contacter le Service Client de ma boutique en ligne ?</label>
                <div class="answer">
                    Pour toute demande, vous pouvez contacter notre Service Client par ce lien <span
                        style="color: #f7941d;"><a href="./contacter.php">contacter</a></span> ou par téléphone au +212 658306560.
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" name="item4" id="item4" />
                <label for="item4">Que dois-je faire si je ne reçois pas ma commande ?</label>
                <div class="answer">
                Si vous n’avez toujours pas reçu votre colis après 6 jours et qu’aucun avis de passage ne vous a été déposé, pensez à vérifier la situation de votre colis selon le mode de livraison choisi. Vous pouvez aussi contacter notre Service Client par ce lien <span
                        style="color: #f7941d;"><a href="./contacter.php">contacter</a></span> 
                </div>
            </div>
            <div class="tab">
                <input type="checkbox" name="item5" id="item5" />
                <label for="item5">Quels sont les modes de paiements acceptés ?</label>
                <div class="answer">
                Nous acceptons uniquement le paiement par Paypal et Carte Bancaire.
                </div>
            </div>


        </div>
    </div>

    <!--End Questions-->
    <?php include('./footer.php');?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>