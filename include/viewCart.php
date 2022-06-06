<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>viewCart</title>
</head>
<body>
     <?php 
    // include 'header.php';
    ?> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded ">
                <h1 class="text-warning">My cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12  col-md-6 col-lg-9">
                <table class="table table-border text-center">
                    <thead class="bg-warning fs-5">
                        <th>Index</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product quantité</th>                 
                        <th>Total</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </thead> 
                    <tbody>
                        <?php 
                         session_start();
                         $stotal=0;
                         $ftotal=0;

                         if(isset($_SESSION['cart'] )){       
                            foreach($_SESSION['cart'] as $key => $value){
                                $stotal=$value['Pprice']*$value['Pquantite'];
                                $ftotal+=$stotal;

                             
                                    echo '
                    <form action="addCart.php" method="POST">
                      <tr>
                        <th scope="row">'.$key.'</th>
                        <td><input type="hidden" name="Pname" value="'.$value['Pname'].'">'.$value['Pname'].'</td>
                        <td><input type="hidden" name="Pprice" value="'.$value['Pprice'].'">'.$value['Pprice'].'</td>
                        <td><input type="number" name="Pquantite" value="'.$value['Pquantite'].'"></td>
                   
                        <td>'.$stotal.'</td>
                        <td><button class="btn btn-info" name="update">Update</button></td>
                        <td><button class="btn btn-secondary" name="delete">Delete</button></td>
                        <td><input name="kra" type="hidden"  value="'.$value['Pname'].'" ><td>
                           
                            
                      </tr>
                    <form>
                     ';
                    }}?>
                        

                    </tbody>
                </table>
            </div>     
            <div class="col-lg-3">
                <h3 >amount</h3>
                <h1><?php echo number_format($ftotal,2) ?></h1>
            </div>        
        </div>
    </div>


    
</body>
</html>