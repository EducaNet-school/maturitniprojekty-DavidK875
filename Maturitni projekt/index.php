<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Maturitní četba</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
    <header>
      <h1>Seznam na maturitu - Domovská stránka</h1>
    </header>

    <nav>
      <a href="index.php">Domovská stránka</a>
      <a href="onas.html">O nás</a>
      <a href="kontakt.html">Kontakt</a>
	    <a href="registrace.php">Registrace</a>
    </nav>
	<div>

  </div>
	<div id = "footer">
      <p>&copy; 2023 Maturitní projekt</p>
    </div>
  </body>
</html>
<?php
$host = 'sql2.endora.cz:3307';
$user = 'davidkirsch';
$password = 'Jirka123';
$dbname = 'seznamnamaturitu';

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM User WHERE jmeno = '$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['heslo'])) {
            $_SESSION['username'] = $row['jmeno'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Username not found.";
    }
}

mysqli_close($conn);
if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" class='login' required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" class='login' required>
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>
</html>
