<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul d'âge</title>
</head>
<body>

<h2>Calculer votre âge</h2>

<form method="post">
    <label for="anneeNaissance">Entrez votre année de naissance :</label>
    <input type="number" id="anneeNaissance" name="anneeNaissance" min="1900" max="2025" required>
    <button type="submit">Calculer</button>
</form>

<?php
function calculerAge($annee) {
    $anneeCible = 2025;
    return $anneeCible - $annee;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $annee = (int)$_POST["anneeNaissance"];
    if ($annee > 0 && $annee <= 2025) {
        $age = calculerAge($annee);
        echo "<p>Vous avez $age ans.</p>";
    } else {
        echo "<p style='color:red;'>Veuillez entrer une année valide.</p>";
    }
}
?>

</body>
</html>
