<?php
include "../pages/conn.php";

if(isset($_POST["toevoegen"])) {
  $title = $_POST["title"]; // waarom doen we dit? 
  $price = $_POST["price"];
  $description = $_POST["description"];
  $image = $_POST["image_url"];



  $sql = "INSERT INTO menukaart (title, price, description, image_url) 
    VALUES (:title, :price, :description, :image)";

  $stmt = $conn->prepare($sql); // waarom doen we dit?

  $stmt->bindParam(":title", $title); // waarom doen we dit?
  $stmt->bindParam(":price", $price);
  $stmt->bindParam(":description", $description);
  $stmt->bindParam(":image", $image);



  $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item toevoegen</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">
  <header class="header">

    <div class="logo">
        <img src="../assets/img/logo-Goud&Zout.png" class="logo-img" alt="Logo">
    </div>

    <nav class="menu">
        <a href="/index.php">Home</a>
        <a href="/pages/menu.php">Menu</a>
        <a href="/pages/overons.php">Over ons</a>
        <a href="/pages/contact.php">Contact</a>
    </nav>
    
  </header>

<main class="add-container">
  <h1 class="add-title">Nieuw item toevoegen</h1>
  <form method="post" action="/pages/toevoegen.php" class="add-form">
    <label>Naam</label>

    <input type="text" name="title" required>

    <label>Prijs (€)</label>

    <input type="number" name="price" step="0.01" min="0" required>

    <label>Beschrijving</label>

    <textarea name="description" rows="4" required></textarea>

    <label>Afbeelding URL</label>

    <input type="url" name="image_url" placeholder="hier de link van de afbeelding" alt="photo - product">

    <div class="form-actions">
      <button type="submit" name="toevoegen" class="add-button">Toevoegen</button>
      <a class="back-button" href="/pages/admin-pannel.php">Terug</a>
    </div>
  </form>
</main>
</body>
</html>