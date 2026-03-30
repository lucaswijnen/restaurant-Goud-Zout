<?php
session_start();
include "../DBcalls/conn.php";

$sql = "SELECT email, password FROM accounts WHERE email = :email AND password = :password;";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$result = $stmt->fetch();

$_SESSION["loggedin"] = true; 
$_SESSION["email"] = $result["email"];

$email = $_POST['email'];
$password = $_POST['password'];

if (!$result) {
    echo "Ongeldige gebruikersnaam of wachtwoord.";
} else {
    header ("location: /pages/admin-pannel.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>login</title>
</head>
<body class="page">
    <header class="header">

    <div class="logo">
        <img src="../assets/img/logo-Goud&Zout.png" class="logo-img" alt="Logo">
    </div>

    <nav class="menu">
        <a href="/index.php">Home</a>
        <a href="/pages/menu.php">Menu</a>
        <a href="/pages/overons.php" >Over ons</a>
        <a href="/pages/contact.php" >Contact</a>
    </nav>

    </header> 

<form class="login-form" method="POST" action="/pages/admin-pannel.php">
  <h2>Inloggen</h2>
  <label>Email</label>
  <input type="email" name="email" required>
  <label>Wachtwoord</label>
  <input type="password" name="password" required>
  <button type="submit" class="form-button">Inloggen</button>
</form>

</body>
</html>
// op de pagina waar je wilt zijn. 
Session_start();
Session_destroy(); 