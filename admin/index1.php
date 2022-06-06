<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/see.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />



    <?php 
  session_start();
  if(!$_SESSION['username']){
    header("location:../../index.php");
  }
?>
</head>

    <div class="header ">
          <span >
            Hello <?php echo $_SESSION['username'] ;?>
          </span>
    </div>




<?php include 'dashboard.php' ?>
<div  class="container">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto my-4 " id="add_product">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label  class="form-label">nom de produit :</label>
                        <input type="text" class="form-control" name="Pname"  placeholder="Veuilles saisir le nom de produit">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">prix de produit :</label>
                        <input type="text" class="form-control" name="Pprice" placeholder="Veuilles saisir le nom de produit">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">image de produit :</label>
                        <input type="file" class="form-control" name="Pimage">
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
                    <button type="submit" class="btn btn-primary form-control fs-4 fw-bold my-3" name="submit">Inserer
                    </button>
                   
                </form>
            </div>
        </div>
    </div>
    
    <div class="container  " style="z-index:-1 !important">
        <div class="row">
            <div class="col-lg-10" style="position:relative;left:170px;">
                <!-- fetch data  -->
                 <table class="table table-light table-hover  text-black border border-primary">
                     <thead class="text-center" >
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRIX</th>
                        <th>IMAGE</th>
                        <th>Catégorie</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>
                    <tbody class="text-center"> 
                        <?php
                          include 'config.php';
                         $record=mysqli_query($conn,"SELECT * FROM `produit`");
                         $i = 1 ;
                         while($row=mysqli_fetch_array($record)) {
                          echo "
                      <tr>
                      <td name='id' >$i</td>
                      <td>$row[Pname]</td>
                      <td>$row[Pprice]</td>
                      <td><img src='$row[Pimage]' height='90px' width='200px'></td>
                      <td>$row[Pcategorie]</td>
                      <td><a href='update.php ? ID=$row[Id]' class='btn btn-info'>Update</a></td>
                    
                        <td><a href='delete.php ? ID=$row[Id]' class='btn btn-secondary'>Delete</a></td>
                      </tr>
                          ";   $i = $i+1; }
                        ?>
           
                      </tbody>
  
                </table>

            </div>
        </div>
    </div>

    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js" />

                         </div>
</html>