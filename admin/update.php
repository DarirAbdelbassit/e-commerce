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

<?php 
 $id=$_GET['ID'];
session_start();
    include 'config.php';
    $res=mysqli_query($conn,"SELECT * FROM `produit` WHERE  id=$id");
    $affich=mysqli_fetch_array($res);
?>

<body >
<div class="header ">
          <span >
            Hello <?php echo $_SESSION['username'] ;?>
          </span>
    </div>
    <?php
    include 'dashboard.php';
 $id=$_GET['ID'];
 include 'config.php';
 $res=mysqli_query($conn,"SELECT * FROM `produit` WHERE  Id=$id");
 $affich=mysqli_fetch_array($res);


?>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto my-3" id="add_product">
                <form action="updateToProductPannel.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label  class="form-label">nom de produit :</label>
                        <input type="text" class="form-control" name="PnameUpdate" value="<?php echo $affich['Pname']  ?>">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">prix de produit :</label>
                        <input type="text" class="form-control" name="PpriceUpdate" value="<?php echo $affich['Pprice'] ?>">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">image de produit :</label>
                        <input type="file" class="form-control" name="PimageUpdate" >
                        <img src="<?php echo $affich['Pimage'] ?>" alt="Image updated" style="height:100px">
                    </div>
                    <div class="form-group">
                         <label >Product description :</label>
                        <textarea class="form-control"  rows="3" name="Pdescription"></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">catégorie de produit :</label>
                        <select class="form-select" aria-label="Default select example" name="Pcategorie" >
                            <option selected>Home</option>
                            <option value="laptop">Laptop</option>
                            <option value="mobil">Mobil</option>
                            <option value="accessoire">Accessoire</option>
                        </select>
                    </div>
                    <input type="hidden" name="idUpdate" value="<?php echo $id   ?>">
                    <button type="submit" class="btn btn-primary form-control fs-4 fw-bold my-3" name="update">Modifie
                    </button>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>









