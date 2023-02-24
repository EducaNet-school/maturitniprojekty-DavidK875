<?php

$username = $email = $password = $confirm_password = "";
?>

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
	  <a href="registrace.php">Registrace</a>
    </nav>
<body> 
  <form method="post">
    <div>
      <label>Přezdívka:<sup>*</sup></label>
      <input type="text" name="username">
    </div>
    <div>
      <label>Email:<sup>*</sup></label>
      <input type="email" name="email">
    </div>
    <div>
      <label>Heslo:<sup>*</sup></label>
      <input type="password" name="password">
    </div>
    <div>
      <label>Zadejte heslo znovu:<sup>*</sup></label>
      <input type="password" name="confirm_password">
    </div>
    <div>
      <input type="submit" value="Submit" name="submit">
    </div>
    <p>Už máte účet? <a href="login.php">Přihlásit</a>.</p>
  </form>
</body>
<div id = "footer">
      <p>&copy; 2023 Maturitní projekt</p>
    </div>
</html>
<?php

		$host = 'sql2.endora.cz:3307';
		$user = 'davidkirsch';
		$password = 'Jirka123';
		$dbname = 'seznamnamaturitu';
		
    $conn = mysqli_connect($host, $user, $password, $dbname);
			if (!$conn) {
		echo("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT * FROM User WHERE jmeno = '$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "Username is already taken.";
    } else {
        if($password == $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO User (jmeno, heslo, email) 
                    VALUES ('$username', '$hashed_password', '$email')";
            $result = mysqli_query($conn, $sql);

            if($result) {
                echo "Registration successful!";
                header("Location: index.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Passwords do not match.";
        }
    }
}

  ?>