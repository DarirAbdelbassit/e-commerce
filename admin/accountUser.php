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
  include 'config.php';
  $sel= mysqli_query($conn,"SELECT * FROM `users` WHERE usertype <> 'administrateur'");
  
  if(!$_SESSION['username']){
    header("location:./../index.php");
  }
?>
</head>
<body class="">
<div class="header ">
          <span >
            
            Hello <?php echo $_SESSION['username'] ;?>
          </span>
    </div>
<div class="wrapper">
      <?php  include 'dashboard.php'?>
      <div class="container ml-3">
        
          <div class="center">
          <div class="container  ">
        <div class="row">
            <div class="col-lg-10  m-auto">     
    <table class="table table-secondary table-bordered ">
        <thead class="text-center">
            <th>Num</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Number</th>
            <th>User type</th>
            <th>delete</th>
        </thead>
        <tbody class="text-center ">
            <?php 
        $i = 1 ;
            while($res=mysqli_fetch_array($sel)){
              if($res['usertype']==''){
                $res['usertype']='client';
              }
                echo "
                <tr>
                <td>$i</td>
                <td>$res[username]</td>
                <td>$res[email]</td>
                <td>0$res[number]</td>
                <td>$res[usertype]</td>
                <td><a class='btn btn-info' href='deleteUser.php?ID=$res[id]'>Delete</a></td>
            </tr>
         
                ";   $i = $i+1; }
            ?>

        </tbody>
        
    </table>   </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
</html>