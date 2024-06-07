<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de los campos del formulario
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        // Realizar la operación seleccionada
        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                break;
            default:
                $resultado = "Error: Operación no válida";
        }

        // Mostrar el resultado
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
