<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/see.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <title>add Product</title>
</head>

<body>
<?php session_start();
include('config.php');

if( !$_SESSION['username']) {
    header("location:../../../../index.php");
}

?><div class="header "><span>Hello <?php echo $_SESSION['username'];

?></span></div><div class="wrapper"style="z-index: 99;"><?php include 'dashboard.php '?></div><div class="container"><div class="row"><div><form action="saiserP.php"method="POST"class="center border border-primary"><h1>Insertion des Codes Promos :</h1><?php if(isset($_POST['ajouter'])) {

    @$name =htmlspecialchars($_POST['name']);
    @$email =htmlspecialchars($_POST['email']);
    @$codepromo =htmlspecialchars($_POST['codepromo']);
    @$percentage =htmlspecialchars($_POST['percentage']);
    $sql="INSERT INTO `promo` (`username`, `email`, `codeP`,`percentage`) VALUES ('$name','$email', '$codepromo','$percentage')";
    $res=mysqli_query($conn, $sql);

    if($res) {

        echo'<div class="alert alert-success">Le code promo est ajouté </div>';
    }

    else {
        echo'<div class="alert alert-danger">Not add</div>';
    }
}

?><label>Les influenceurs :</label><input class="form-control"type="text"name="name"required><label>Email : </label><input class="form-control"type="email"name="email"required><label>Code Promo : </label><input class="form-control"type="text"name="codepromo"required><label>percentage : </label><input class="form-control"type="text"name="percentage"max="80"required><br><br><input class="btn btn-warning"type="submit"value="ajouter"name="ajouter"></form><div class="container  "><div class="row"><div class="col-lg-10  m-auto  "><table class="table table-secondary table-bordered "><thead class="text-center"><th>Influenceurs</th><th>Email</th><th>CodePromo</th><th>percentage</th><th>supprimer</th></thead><tbody class="text-center "><?php $sel=mysqli_query($conn, "SELECT * FROM `promo`");

while($res=mysqli_fetch_array($sel)) {
    echo "
<tr><td>$res[username]</td><td>$res[email]</td><td>$res[codeP]</td><td>-$res[percentage]%</td><td><a class='btn btn-info'href='deletepromo.php?ID=$res[id]'>Delete</a></td>"; }
?></tbody></table></div></div></div></div></div></div></body></html>