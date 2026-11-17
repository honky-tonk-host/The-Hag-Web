<?php

$pdo = new PDO("mysql:host=localhost;port=8889;dbname=nadal;charset=utf8mb4", "root", "root");

$stmt = $pdo->query("SELECT king FROM Cartas WHERE id = (SELECT max(id) FROM Cartas)");
$carta = $stmt->fetch();


$arbre="...YY...\n..YWWY..\n...YY...\n...GG...\n..GGGG..\n.GGGGGG.\n...BB...\n...BB...";

echo $carta['king'] . "\n" . $arbre;
