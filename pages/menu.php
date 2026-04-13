<?php
include "../DBcalls/conn.php";
include "../DBcalls/read.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Goud & Zout - Menu</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">

<header class="header">

  <div class="logo">
    <img src="../assets/img/logo-Goud&Zout.png" class="logo-img" alt="Logo">
  </div>

  <nav class="menu">
    <a href="/index.php" >Home</a>
    <a href="/pages/menu.php"  class="dikgedrukt">Menu</a>
    <a href="/pages/overons.php">Over ons</a>
    <a href="/pages/contact.php">Contact</a>
  </nav>

  <a href="/pages/login.php" class="login-button">Inloggen</a>

</header>

<section class="menukaart-header">
  <h1>Menukaart</h1>
</section>

<section class="zoekbalk">
  <form method="get" action="/pages/menu.php">
    <input type="text" name="zoek" placeholder="Zoek een gerecht" value="">
    <button type="submit">Zoeken</button>
  </form>
</section>

<main class="product-area">

  <?php foreach ($result as $product) { ?>
<article class="product-card">
    <div class="product-image">
      <img src="<?= $product['image_url'] ?>">
    </div>

    <h3 class="product-title"><?= $product['title'] ?></h3>
    <p class="product-desc"><?= $product['description'] ?></p>
    <p class="product-price">€ <?= $product['price'] ?></p>

</article>
  <?php } ?>

</main>

</body>
</html>