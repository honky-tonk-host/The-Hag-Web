<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = new PDO("mysql:host=localhost;port=8889;dbname=nadal;charset=utf8mb4", "root", "root");

$stmt = $pdo->prepare("INSERT INTO Cartas (name, king, message) VALUES (?, ?, ?)");
$stmt->execute([$_POST['name'], $_POST['king'], $_POST['message']]);

$id = $pdo->lastInsertId();
header("Location: gracies.php?id=" . $id);
exit;


}


?>
