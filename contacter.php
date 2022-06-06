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
    <link rel="stylesheet" href="./css/contacte.css">
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
                        <a href="contacter.php" class="nav-link" id="active">contactez-nous</a>
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
                        <h3>Dites-nous ce que vous voulez</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <br /><br />
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>Mettre en contact</h4>
                                <h3>nous envoyer un message</h3>
                            </div>
                            <?php 
                $Mesg = "";        
                  if(isset($_GET['signup']))
                  {
                    $Mesg = "Vous devriez être un client pour communiquer avec nous";
                    echo'<div class="alert alert-danger">'.$Mesg.'</div>';
                  }
                  if(isset($_GET['success'])){
                    $Mesg = "Votre message est envoyé";
                    echo'<div class="alert alert-success">'.$Mesg.'</div>';}
                ?>
                            <form class="form" method="POST" action="contact.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Votre nom<span>*</span></label>
                                            <input name="UName" type="text" placeholder="Votre nom" require />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Vos sujets <span>*</span></label>
                                            <input name="Subject" type="text" placeholder="sujet" require/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Votre Email<span>*</span></label>
                                            <input name="Email" type="email" placeholder="Email" require/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Votre téléphone</label>
                                            <input name="phonenumber" type="text" placeholder="Votre numéro de téléphone"
                                                 />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Votre message<span>*</span></label>
                                            <textarea name="msg" placeholder="Écrire le message" require></textarea>
                                        </div>
                                    </div>
                                    <button id="btn_submit" name="btn-send">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <h4 class="title" style="color:#f7941d">Appelez-nous maintenant:</h4>
                                <h6>+212 6583 06560</h6>
                                <h6>+212 2823 06760</h6>
                            </div>
                            <br />
                            <div class="single-info">
                                <h5 class="title" style="color:#f7941d">Email:</h5>
                                <h6>darirabdelbasset@gmail.com</h6>
                                <h6>stafabdoulah200@gmail.com</h6>
                            </div>
                            <br />
                            <div class="single-info">
                                <h4 class="title" style="color:#f7941d">Notre Adresse:</h4>
                                <h6>
                                ECOLE SURPERIEUR DE TECHNOLOGIE GUELMIM
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->
    <br /><br />
    <?php include('./footer.php');?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>