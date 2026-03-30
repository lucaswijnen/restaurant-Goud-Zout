<?php
include "conn.php";
Session_start();

$sql = "SELECT * FROM menukaart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminpaneel - Goud & Zout</title>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">

  <header class="header">

    <div class="logo">
        <img src="/assets/img/logo-Goud&Zout.png" class="logo-img" alt="Logo">
    </div>

    <nav class="menu">
      <a href="/index.php">Home</a>
      <a href="/pages/menu.php">Menu</a>
      <a href="/pages/overons.php">Over ons</a>
      <a href="/pages/contact.php">Contact</a>
    </nav>
    
  </header>

  <main class="admin-container">
    <section class="admin-hero">
      <h1>Adminpaneel</h1>
      <p>Beheer hier de inhoud van de website.</p>
    </section>

    <section class="admin-actions">
      <a class="admin-card" href="/pages/toevoegen.php">
        <div class="admin-card-icon">
          <ion-icon name="add-circle-outline"></ion-icon>
        </div>
        <h3>Item toevoegen</h3>
        <p>Voeg een nieuw gerecht of bericht toe.</p>
      </a>

      <a class="admin-card" href="/pages/bewerken.php">
        <div class="admin-card-icon">
          <ion-icon name="create-outline"></ion-icon>
        </div>
        <h3>Item bewerken</h3>
        <p>Pas bestaande items aan.</p>
      </a>

      <a class="admin-card" href="/pages/verwijder.php">
        <div class="admin-card-icon">
          <ion-icon name="trash-outline"></ion-icon>
        </div>
        <h3>Item verwijderen</h3>
        <p>Verwijder wat je niet meer nodig hebt.</p>
      </a>
    </section>
  </main>


<h1>Admin paneel</h1>

<a href="/pages/toevoegen.php">Product toevoegen</a>

<div class="product-area">

<?php foreach ($result as $product) { ?>

<div class="product-card">

<img src="<?= $product['image_url'] ?>" width="150">

<h3><?= $product['title'] ?></h3>

<p><?= $product['description'] ?></p>

<p>€ <?= $product['price'] ?></p>

<a href="/pages/item-edit.php?id=<?= $product['id'] ?>">Bewerken</a>

<a href="/pages/delete.php?id=<?= $product['id'] ?>">Verwijderen</a>

</div>

<?php } ?>

</div>

</body>
</html>