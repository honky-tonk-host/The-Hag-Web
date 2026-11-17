<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIAT!!</title>
     <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Rye&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/styles.css" />
</head>
<body class="carta cartaGracies">
    <header>
        <h1>Enviat!</h1>
    </header>
    <main>
        <section class="enviat">
            
            <span class="tree">🎄</span>
            <div>
  <?php


    $pdo = new PDO("mysql:host=localhost;port=8889;dbname=nadal;charset=utf8mb4", "root", "root");


$stmt = $pdo->prepare("SELECT * FROM Cartas WHERE id = ?");
$stmt->execute([$_GET['id']]);
$carta = $stmt->fetch();

echo "Your name: " .  htmlspecialchars($carta['name']) . "<br>";  

echo "Your king: " . htmlspecialchars($carta['king']) . "<br>";

echo "Presents: " . htmlspecialchars($carta['message']) . "<br>";



?>
</div>
<span class="tree">🎄</span>
</section>
</main>
</body>
</html>


