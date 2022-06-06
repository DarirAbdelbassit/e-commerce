<?php
session_start();
@$Pname=$_POST['Pname'];
@$Pprice=$_POST['Pprice'];
@$Pquantite = $_POST['Pquantite'];
if(isset($_POST['PaddCart'])){
if(empty($Pquantite)){$Pquantite = $Pquantite + 1 ;} 
if(!empty($_SESSION['cart'])) {
    @$check_product=array_column($_SESSION['cart'],'Pname');//chercher le contenu d'une column dans un tablle
    if(in_array($Pname,$check_product)){
        echo "
        <script>
        alert(' Ce produit est déjà ajouté ' );
        </script>
        ";
        header('location:store.php');
    }}//vérifie l'existance de nome de produit saisu dans la table
    if(empty($_SESSION['cart'])||!in_array($Pname,$check_product)){
       
$_SESSION['cart'][]=array('Pname'=>$Pname,'Pprice'=>$Pprice,'Pquantite'=>$Pquantite,);

//  header("location:");

header('location:store.php');

}}
//Supprimer le produit

if(isset($_POST['delete'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['Pname']===$_POST['kra']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            header('location:cart.php');
        }
    }
}

if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['Pname']===$_POST['kra']){  
            $_SESSION['cart'][$key]=array('Pname'=>$Pname,'Pprice'=>$Pprice,'Pquantite'=>$Pquantite);
            header('location:cart.php');
        }
    }

}

?>