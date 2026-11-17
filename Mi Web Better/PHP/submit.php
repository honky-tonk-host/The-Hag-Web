<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = new PDO("mysql:host=localhost;port=8889;dbname=nadal;charset=utf8mb4", "root", "root");

    $prohibides = ["fuck", "shit", "bitch", "bastard", "asshole", "dickhead", "wanker",
    "bollocks", "bullshit", "motherfucker", "cunt", "piss off", "prick",
    "twat", "douchebag", "jackass", "dumbass", "slut", "whore", "retard",
    "stupid", "idiot", "moron", "shut up",
    "mierda", "joder", "gilipollas", "cabrón", "cabron", "hostia", "coño",
    "pendejo", "imbécil", "imbecil", "idiota", "estúpido", "estupido",
    "subnormal", "capullo", "maricón", "zorra", "puto", "hijo de puta",
    "chinga", "pinche", "mamón", "tonto", "caca", "cállate",
     "merda", "collons", "fill de puta", "cagar", "imbècil", "burro", "fucking", "fucker", "shitty", "bitchy", "son of a bitch", "piece of shit",
    "goddamn", "dammit", "crap", "arsehole", "arse", "bellend", "knobhead",
    "tosser", "skank", "scumbag", "jerk", "loser", "dork", "freak", "ugly",
    "fatso", "nerd", "sucks", "go to hell", "screw you", "kill you", "joputa", "hijoputa", "malparido", "cabrona", "cojones", "huevón", "huevon", "boludo", "pelotudo", "cagón", "cagon", "mamada", "chingada", "verga",
    "carajo", "pajero", "zorrón", "baboso", "bobo", "pringado", "payaso",
    "mongolo", "tarado", "ete a la mierda", "que teden", "cabró", "gilipolles", "imbecil", "capullo", "pallasso", "fastigós",
    "vés a la merda", "quos de quòniam"];

    foreach ($prohibides as $paraula) {
    if ((str_contains(mb_strtolower($_POST['message']), $paraula))||(str_contains(mb_strtolower($_POST['name']), $paraula))) {
        header("Location: ../pages/carta.html"); exit;
    }
}



$stmt = $pdo->prepare("INSERT INTO Cartas (name, king, message) VALUES (?, ?, ?)");
$stmt->execute([$_POST['name'], $_POST['king'], $_POST['message']]);

$id = $pdo->lastInsertId();
header("Location: gracies.php?id=" . $id);
exit;


}


?>
