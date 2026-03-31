<?php
include "../DBcalls/conn.php";

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