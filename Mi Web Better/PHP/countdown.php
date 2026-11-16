<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/styles.css" />
     <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Rye&display=swap"
      rel="stylesheet"
    />
    <meta http-equiv="refresh" content="1">

</head>
<body class="countdown">
    

<?php

date_default_timezone_set('Europe/Madrid');
$ara = time();
$cap_d_any = strtotime('2027-01-01 00:00:00');
$restant = $cap_d_any - $ara;

$dies   = floor($restant / 86400);
$hores  = floor(($restant % 86400) / 3600);
$minuts = floor(($restant % 3600) / 60);
$segons = $restant % 60;

echo "Falten $dies dies, $hores hores, $minuts minuts i $segons segons per l'Any Nou!";
?>
    
</body>
</html>


