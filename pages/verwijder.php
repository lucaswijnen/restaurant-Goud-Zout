<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verwijderen</title>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">

<header class="header">

  <div class="logo">
    <img src="../assets/img/logo-Goud&Zout.png" class="logo-img" alt="Logo">
  </div>

  <nav class="menu">
    <a href="/index.php">Home</a>
    <a href="/menu.php">Menu</a>
    <a href="/overons.php">Over ons</a>
    <a href="/contact.php">Contact</a>
  </nav>

  <a href="/admin.php" class="login-button">Terug</a>
  
</header>


<div class="page-title">
    <h1 class="title">
        Goud & Zout producten verwijderen
    </h1>
</div>

<main class="product-area">

 <?php
 foreach ($result as $persoon) {

 

?>

  <article class="product-card">
    <div class="product-image">
      <img src="/img/friet.jpg" alt="">
    </div>
    <h3 class="product-title">Friet Klein</h3>
    <p class="product-desc">Heerlijke verse friet</p>
    <p class="product-price">€ 3.50</p>
    <a class="edit-link" href="#">Verwijderen</a>
  </article>

<?php
echo $persoon['voornaam']; // alle voor namen alleen uitgeprint


 }

?>

</main>

</body>
</html>



  <article class="product-card">
    <div class="product-image">
      <img src="/img/burger.jpg" alt="">
    </div>
    <h3 class="product-title">Burger</h3>
    <p class="product-desc">Sappige burger met saus</p>
    <p class="product-price">€ 6.00</p>
    <a class="edit-link" href="#">Verwijderen</a>
  </article>


<input type="text" hidden name="personeelnummer" value="<?php $persoon['personeelnummer']; ?>">

  <input type="text" name="title" placeholder="title" value="<?php echo $persoon['title'] ?> "> 
  // dan zou je zeggen persoon naar menukaart veranderen.

  $stmt->bindparam('personeelnummer', $personeelnuimmer); 

  post ook personeel 