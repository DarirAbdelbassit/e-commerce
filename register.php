<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$number = htmlspecialchars($_POST['number']);
	$password = htmlspecialchars(md5($_POST['password']));
	$cpassword = htmlspecialchars(md5($_POST['cpassword']));
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password,number)
					VALUES ('$username', '$email', '$password',$number)";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('done! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				$number="";
                header('location:login.php');
			} else {
				echo "<script>alert('error! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('error! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('try confroming your password.')</script>";
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

    <title>Enregistrement</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Enregistrement</p>
            <div class="input-group">
                <input type="text" placeholder="Nom d'utilisateur" name="username" value="<?php echo $username; ?>"
                    required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Numéro de téléphone" name="number" value="<?php echo $number; ?>"
                    required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Le mot de passe" name="password"
                    value="<?php echo $_POST['password']; ?>" required  minlength="8">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirmer le mot de passe" name="cpassword"
                    value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">S'inscrit</button>
            </div>
            <p class="login-register-text">Avoir un compte? <a href="login.php">Connectez-vous ici</a>.</p>
        </form>
    </div>
</body>

</html>