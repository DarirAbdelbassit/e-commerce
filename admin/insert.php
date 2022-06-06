<?php   
include 'config.php';
if(isset($_POST['submit'])){
echo"Hello";
@$Pname=htmlspecialchars($_POST['Pname']);
@$Pprice=htmlspecialchars($_POST['Pprice']);
@$Pimage=$_FILES['Pimage'];
@$image_loc=$_FILES['Pimage']['tmp_name'];//localisation de l'image comme tableau 
@$image_name=$_FILES['Pimage'] ['name'];
@$image_des="ImageProduit/".$image_name; // destination de l'image dans un folder
move_uploaded_file($image_loc,$image_des);

// $Pdescription=htmlspecialchars($_POST['Pdescription']);
$Pcategorie=$_POST['Pcategorie'];
//Insertion de produit dans une base de donnée qui port le nom "ecommerce"
$staf = mysqli_query($conn,"INSERT INTO `produit`(`Pname`, `Pprice`, `Pimage`, `Pcategorie`,`Pdescription`)
                    VALUES ('$Pname','$Pprice','$image_des','$Pcategorie','". $_POST['Pdescription'] ."')");

if($staf)
header("location:index1.php");
else
echo"noo";

}
?>