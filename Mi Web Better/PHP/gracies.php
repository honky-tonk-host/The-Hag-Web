<?php


    $pdo = new PDO("mysql:host=localhost;port=8889;dbname=nadal;charset=utf8mb4", "root", "root");
echo "Enviat! <br><br>";

$stmt = $pdo->prepare("SELECT * FROM Cartas WHERE id = ?");
$stmt->execute([$_GET['id']]);
$carta = $stmt->fetch();

echo "Your name: " .  htmlspecialchars($carta['name']) . "<br>";  

echo "Your king: " . htmlspecialchars($carta['king']) . "<br>";

echo "Presents: " . htmlspecialchars($carta['message']) . "<br>";



?>
