<?php

if (isset($_POST['email']) && isset($_POST['password'])) { // vraag
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$sql = "SELECT email, password FROM accounts WHERE email = :email AND password = :password;";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$result = $stmt->fetch();

$_SESSION["loggedin"] = true; 
$_SESSION["email"] = $result["email"];

if (!$result) {
    echo "Ongeldige gebruikersnaam of wachtwoord.";
} else {
    header ("location: /pages/admin-pannel.php");
}

?>