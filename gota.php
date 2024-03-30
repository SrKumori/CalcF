<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Posologia</title>
</head>
<body>

<h1>Calculadora de Posologia</h1>

<form method="post">
    <label for="gotas">Número de gotas prescritas:</label>
    <input type="number" id="gotas" name="gotas" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gotas = $_POST["gotas"];
    $ml_por_gota = 1 / 21;
    $ml_necessarios = $gotas * $ml_por_gota;

    echo "<p>Para cumprir a posologia de $gotas gotas, você precisará de " . number_format($ml_necessarios, 2) . " ml.</p>";
}
?>

</body>
</html>