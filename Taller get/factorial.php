3.- Ingresa n por GET y calcula n! usando do...while. Si n es 0, el factorial es 1.


<?php
$titulo = "Calculadora de Factorial";
$info = "Ingresa un número y calcularemos su factorial (n!) usando do...while.";
?>


<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $info; ?></p>

    <form method="get" action="factorial.php">
        <label for="numero">Número (n):</label>
        <input type="number" name="numero" id="numero" min="0" required />
        <input type="submit" name="calcular" value="Calcular Factorial" />
    </form>

    <?php
    
    if (isset($_GET["calcular"])) {
        $numero = isset($_GET["numero"]) ? intval($_GET["numero"]) : -1;

        if ($numero < 0) {
            echo "<p>Por favor ingresa un número no negativo.</p>";
        } else {
            // Calcular factorial usando do...while
            $factorial = 1;
            $n = $numero;
            
            if ($numero === 0) {
                $factorial = 1;
            } else {
                do {
                    $factorial *= $n;
                    $n--;
                } while ($n > 0);
            }
            
            echo "<h2>Resultado:</h2>";
            echo "<p><strong>Número ingresado (n):</strong> " . intval($numero) . "</p>";
            echo "<p><strong>Factorial (" . intval($numero) . "!):</strong> " . intval($factorial) . "</p>";
        }
    }
    ?>
</body>

</html>
