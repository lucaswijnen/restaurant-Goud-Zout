<?php
include "conn.php";


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM menukaart WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);

    $product = $stmt->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image_url'];

    $sql = "UPDATE menukaart 
            SET title = :title, price = :price, description = :description, image_url = :image 
            WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'title' => $title,
        'price' => $price,
        'description' => $description,
        'image' => $image,
        'id' => $id
    ]);

    header("Location: ../pages/admin-pannel.php");
    exit;
}