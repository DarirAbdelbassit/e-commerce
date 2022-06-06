<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/see.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>DARIRSTAF</h2>
            <ul>
                <li>
                    <a href="mystore.php">Accueil</a>
                </li>
                <li>
                    <a href="profileadmin.php">Profile</a>
                </li>
                <li>
                    <a href="index1.php">Page d'ajoute</a>
                </li>
                <li>
                    <a href="accountUser.php">Utilisateurs</a>
                </li>
                <li>
                    <a href="contactUser.php">Contact
    <?php        
    include 'config.php';
        $contact=mysqli_query($conn,"SELECT * FROM `contact_us`");
                       $count = mysqli_num_rows($contact); 
                          echo"<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        ?></a></li>
                <li>
                    <a href="saiserP.php">Les Promos </a>
                </li>
                
                <li>
                    <a href="logout.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>