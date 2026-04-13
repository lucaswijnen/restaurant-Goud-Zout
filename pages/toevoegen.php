<?php
include "../DBcalls/create.php";
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

    <input type="text" name="image_url" placeholder="hier de link van de afbeelding" alt="photo - product">

    <div class="form-actions">
      <button type="submit" name="toevoegen" class="add-button">Toevoegen</button>
      <a class="back-button" href="/pages/admin-pannel.php">Terug</a>
    </div>
  </form>
</main>
</body>
</html>