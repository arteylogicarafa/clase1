
<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $resultado = $numero1 + $numero2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora con PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            padding: 40px;
        }

        .contenedor {
            background: white;
            max-width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ccc;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            background: #2563eb;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            cursor: pointer;
        }

        .resultado {
            background: #dcfce7;
            padding: 12px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h2>Calculadora de Suma</h2>

    <form method="POST" action="">

        <label>Número 1:</label>
        <input type="number" name="numero1" required>

        <label>Número 2:</label>
        <input type="number" name="numero2" required>

        <button type="submit">Enviar y sumar</button>

    </form>

    <?php if ($resultado !== "") { ?>

        <div class="resultado">
            <h3>Resultado: <?php echo $resultado; ?></h3>
        </div>

    <?php } ?>

</div>

</body>
</html>
