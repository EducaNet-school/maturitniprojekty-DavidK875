
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrace</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <header>
      <h1>Maturitní četba - Registrace</h1>
    </header>
	<nav>
      <a href="index.php">Domovská stránka</a>
      <a href="onas.html">O nás</a>
      <a href="kontakt.html">Kontakt</a>
	  <a href="login.php">Login</a>
	  <a href="registrace.php">Registrace</a>
    </nav>
<body> 
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div>
      <label>Přezdívka:<sup>*</sup></label>
      <input type="text" name="username" value="<?php echo $username; ?>">
      <span class="error"><?php echo $username_err; ?></span>
    </div>
    <div>
      <label>Email:<sup>*</sup></label>
      <input type="email" name="email" value="<?php echo $email; ?>">
      <span class="error"><?php echo $email_err; ?></span>
    </div>
    <div>
      <label>Heslo:<sup>*</sup></label>
      <input type="password" name="password" value="<?php echo $password; ?>">
      <span class="error"><?php echo $password_err; ?></span>
    </div>
    <div>
      <label>Zadejte heslo znovu:<sup>*</sup></label>
      <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
      <span class="error"><?php echo $confirm_password_err; ?></span>
    </div>
    <div>
      <input type="submit" value="Submit">
    </div>
    <p>Už máte účet? <a href="login.php">Přihlásit</a>.</p>
  </form>
</body>
<div id = "footer">
      <p>&copy; 2023 Maturitní projekt</p>
    </div>
</html>
<?php

		$host = 'localhost';
		$user = 'spravce';
		$password = 'heslo123';
		$dbname = 'mp';
		
    $conn = mysqli_connect($host, $user, $password, $dbname);
  var_dump($conn);
			if (!$conn) {
		echo("Connection failed: " . mysqli_connect_error());
}
  $username = $email = $password = $confirm_password = "";
  echo "Ahoj";
  $username_err = $email_err = $password_err = $confirm_password_err = "";
  var_dump($conn);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
      $username_err = "Please enter a username.";
    } else {
      $username = trim($_POST["username"]);
    }
    
    if (empty(trim($_POST["email"]))) {
      $email_err = "Please enter an email address.";
    } else {
      $email = trim($_POST["email"]);
    }
    
    if (empty(trim($_POST["password"]))) {
      $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
      $password_err = "Password must have at least 6 characters.";
    } else {
      $password = trim($_POST["password"]);
    }
    
    if (empty(trim($_POST["confirm_password"]))) {
      $confirm_password_err = "Please confirm password."; 
    } else {
      $confirm_password = trim($_POST["confirm_password"]);
      if ($password != $confirm_password) {
        $confirm_password_err = "Password did not match.";
      }
    }
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
      $sql = "SELECT id FROM user WHERE jmeno = ?";

	  if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        if (mysqli_stmt_execute($stmt)) {
          mysqli_stmt_store_result($stmt);
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "Toto jméno je již zabrané.";
          } else {
            $sql = "INSERT INTO user (jmeno, email, heslo) VALUES (?, ?, ?)";
            if ($stmt = mysqli_prepare($conn, $sql)) {
              mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
              $param_username = $username;
              $param_email = $email;
              $param_password = password_hash($password, PASSWORD_DEFAULT);
              if (mysqli_stmt_execute($stmt)) {
                header("location: index.php");
              } 
            }
            mysqli_stmt_close($stmt);
          }
        } else {
          echo "Oops! Něco se pokazilo. Zkuste to znovu.";
        }
      }
    }
    mysqli_close($conn);
	
  }
  ?>