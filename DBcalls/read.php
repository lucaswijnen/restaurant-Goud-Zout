<?php

$sql = "SELECT * FROM menukaart";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();



