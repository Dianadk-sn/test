<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice simple</title>
</head>
<body>

<h2>Calculatrice simple</h2>

<form method="post">
    <label for="nombre1">Nombre 1 :</label>
    <input type="number" step="any" id="nombre1" name="nombre1" required><br><br>

    <label for="operateur">Opérateur :</label>
    <select id="operateur" name="operateur" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <label for="nombre2">Nombre 2 :</label>
    <input type="number" step="any" id="nombre2" name="nombre2" required><br><br>

    <button type="submit">Calculer</button>
</form>

<?php
function calculer($a, $b, $operateur) {
    switch ($operateur) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro impossible.";
            }
            return $a / $b;
        default:
            return "Erreur : opérateur inconnu.";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = (float)$_POST["nombre1"];
    $b = (float)$_POST["nombre2"];
    $operateur = $_POST["operateur"];

    $resultat = calculer($a, $b, $operateur);

    if (is_string($resultat)) {
        echo "<p style='color:red;'>$resultat</p>";
    } else {
        echo "<p>Résultat : $a $operateur $b = $resultat</p>";
    }
}
?>

</body>
</html>
