<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars(md5($_POST['password']));

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		if($row["usertype"] == "administrateur"){
			header("Location: ./admin/mystore.php");
		}
		else{
            $_SESSION['client']=$row['id'];
			header("Location: index.php");

		}
		
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
    if(isset($_POST['check'])){
        setcookie('email',$email,time() + 365*24*3600,null,null,false,true);
        setcookie('password',$_POST['password'],time() + 365*24*3600,null,null,false,true);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./css/login.css">

    <title>formulaire de connexion</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">connexion</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="mot de passe" name="password"
                    value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" required>
            </div>
         
               <center> <input type="checkbox" name="check" id="check" >
                <label fro="check">se souvenir de moi</label></center><br>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Vous n’avez pas de compte ? <a href="register.php">inscrivez-vous ici</a>.
            </p>
        </form>
    </div>
</body>

</html>