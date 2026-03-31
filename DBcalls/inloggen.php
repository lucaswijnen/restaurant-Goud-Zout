<?php

include "conn.php";
 
$sql = "SELECT email, password FROM accounts WHERE email = :email AND password = :password;";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':password', $_POST['password']);
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