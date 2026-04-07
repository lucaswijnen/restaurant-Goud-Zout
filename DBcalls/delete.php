<?php

include "../DBcalls/conn.php";

$sql = "DELETE FROM menukaart WHERE id = :id";
$stmt = $conn->prepare($sql);


$stmt->bindParam(":id",  $_POST['id']);
$stmt->execute();


header("Location: /pages/admin-pannel.php");
