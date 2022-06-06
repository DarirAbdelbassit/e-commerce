            <!-- changer l'id lorsqu'on change le produit  -->
            <?php  
            session_start();
            if(isset($_POST['update'])){
                $id=$_POST['idUpdate'];
                $Pname=$_POST['PnameUpdate'];
                $Pprice=$_POST['PpriceUpdate'];
               //il ya un problem c'est que on ne peut pas avoir l'image origine dans la manque de la saisition de nouvelle images
                $Pimage=$_FILES['PimageUpdate'];
                $image_loc=$_FILES['PimageUpdate']['tmp_name'];//localisation de l'image comme tableau 
                $image_name=$_FILES['PimageUpdate'] ['name'];
                $image_des="ImageProduit/".$image_name; // destination de l'image dans un folder
                move_uploaded_file($image_loc,$image_des);
                $Pdescription=$_POST['Pdescription'];
                $Pcategorie=$_POST['Pcategorie'];
                $conx=mysqli_connect('localhost','root','','ecommerce');
                $sd = "UPDATE `produit` SET `Pname`='$Pname',`Pprice`='$Pprice',`Pimage`='$image_des',`Pcategorie`='$Pcategorie',`Pdescription`='$Pdescription' WHERE Id='$id'";
                $res = mysqli_query($conx,$sd);
                 if($res){  
                    header("location:index1.php");
                }
                else echo "error";
            }
            ?>