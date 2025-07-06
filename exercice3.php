<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>
</head>
<body>

<h2>Table de multiplication</h2>

<form method="post">
    <label for="nombre">Entrez un nombre :</label>
    <input type="number" id="nombre" name="nombre" required>
    <button type="submit">Afficher la table</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = (int)$_POST["nombre"];

    echo "<h3>Table de multiplication de $nombre :</h3>";
    echo "<pre>";

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre x $i = $resultat\n";
    }

    echo "</pre>";
}
?>

</body>
</html>
