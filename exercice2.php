<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification du mot de passe</title>
</head>
<body>

<h2>Vérification du mot de passe</h2>

<form method="post">
    <label for="motDePasse">Entrez un mot de passe :</label>
    <input type="password" id="motDePasse" name="motDePasse" required>
    <button type="submit">Vérifier</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $motDePasse = $_POST["motDePasse"];

    $longueur = strlen($motDePasse) >= 8;
    $chiffre = preg_match('/\d/', $motDePasse);
    $majuscule = preg_match('/[A-Z]/', $motDePasse);

    if ($longueur && $chiffre && $majuscule) {
        echo "<p style='color:green;'>Mot de passe valide ✅</p>";
    } else {
        echo "<p style='color:red;'>Mot de passe invalide ❌</p>";
        echo "<ul>";
        if (!$longueur) {
            echo "<li>Il doit contenir au moins 8 caractères.</li>";
        }
        if (!$chiffre) {
            echo "<li>Il doit contenir au moins un chiffre.</li>";
        }
        if (!$majuscule) {
            echo "<li>Il doit contenir au moins une lettre majuscule.</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
