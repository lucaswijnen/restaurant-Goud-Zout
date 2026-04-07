<?php
session_start();

include "../DBcalls/conn.php";
include "../DBcalls/read.php";

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
    </section>
  </main>

  <main class="product-area">

    <?php foreach ($result as $product) { ?>
      <article class="product-card">
        <div class="product-image">
          <img src="<?= $product['image_url'] ?>">
        </div>

        <h3 class="product-title"><?= $product['title'] ?></h3>
        <p class="product-desc"><?= $product['description'] ?></p>
        <p class="product-price">€ <?= $product['price'] ?></p>

        <div class="product-actions">

          <a class="admin-card" href="/pages/bewerken.php?id=<?= $product['id'] ?>">
            <div class="admin-card-icon">
              <ion-icon name="create-outline"></ion-icon>
            </div>
            <span>Bewerken</span>
          </a>

          <form method="POST" action="../DBcalls/delete.php">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <button type="submit" class="admin-card">
              <div class="admin-card-icon">
                <ion-icon name="trash-outline"></ion-icon>
              </div>
              <span>Verwijderen</span>
          </form>

        </div>

      </article>
    <?php } ?>

  </main>
  
</body>
</html>
