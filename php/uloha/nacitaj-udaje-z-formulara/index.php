<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Formulár na prijatie do zamestnania</title>
</head>
<body>
<form action="spracuj-formular.php" method="POST">
    <label for="name">Zadaj meno študenta:</label>
    <input type="text" name="meno" id="name"><br>
    <label for="birth-date">Zadaj dátum narodenia:</label>
    <input type="date" name="datum" id="birth-date"><br>
    <label for="become">Zadaj nástup do zamestnania:</label>
    <input type="text" name="nastup" id="become"><br>
    <label for="mark">Zadaj známku z maturitnej skúšky:</label>
    <input type="number" name="znamka" step="0.1" id="mark"><br>
    <input type="submit" value="Odoslať">
</form>
</body>
</html>