<?php
$pdo = new PDO ('mysql:host=localhost;dbname=products','root','');

$stmt = $pdo->prepare('SELECT*FROM product');
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($products);
?>