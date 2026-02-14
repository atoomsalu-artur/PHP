<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

<h1>Harjutus 01 - muutujad</h1>

<?php
$nimi = "Imre";
$sunniaasta = 1990;
$tahtkuju = "jaar";

echo $nimi,"<br>",$sunniaasta,"<br>",$tahtkuju;
echo "<br>";
echo $nimi."<br>".$sunniaasta."<br>".$tahtkuju;
echo "<br>";
echo "IT'S My life";
?>

<h2>Harjutus 02 - vormid</h2>

<form method="get">
Arv1: <input type="number" name="arv1"><br>
Arv2: <input type="number" name="arv2"><br>
<input type="submit" value="Liida"><br>
</form>

<?php
if(isset($_GET['arv1']) && isset($_GET['arv2'])) {

$nr1 = $_GET['arv1'];
$nr2 = $_GET['arv2'];

$liida = $nr1 + $nr2;

echo $liida;

}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>