<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/see.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <title>add Product</title>


    <?php 
  session_start();
  $conx=mysqli_connect('localhost','root','','ecommerce');
  $sel=mysqli_query($conx,"SELECT * FROM `users`"); 
  if(!$_SESSION['username']){
    header("location:../index.php");
  }
?>

</head>

<body class="">
    <div class="header ">
        <span>
            Hello <?php echo $_SESSION['username'] ;?>
        </span>
    </div>
    <div class="wrapper">
        <?php  include 'dashboard.php '?>
        <div class="container ml-3">
            <div class="center">
                <div class="container  ">
                    <div class="row">
                        <div class="col-lg-10  m-auto  ">
                            <table class="table table-secondary table-bordered ">
                                <thead class="text-center">
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Sujet</th>
                                    <th class="px-5">Message</th>
                                    <th>Repondre</th>
                                    <th>supprimer</th>
                                </thead>
                                <tbody class="text-center ">
                                    <?php 
               $conn=mysqli_connect('localhost','root','','ecommerce');
               $record=mysqli_query($conn,"SELECT * FROM contact_us ");
               while($row=mysqli_fetch_array($record)){
                echo '
              <tr>
                <td>'.$row['User_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['subject'].'</td>
                <td>'.$row['message'].'</td>
                <td><a class="btn btn-success" href = "mailto: '.$row['email'].' ">Contacter</a></td>
                <td><a class="btn btn-danger" href="deleteMessage.php?ID='.$row['id'].'">Supprimere</a></td>
            </tr>
                '; }
            ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>