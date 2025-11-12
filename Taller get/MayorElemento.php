<?php
$titulo = "Buscador del Mayor Elemento";
$info = "Ingresa números separados por coma y encontraremos el mayor elemento.";
$info .= " Ejemplo: 1,2,4,56,3,6";
?>


<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $info; ?></p>

    <form method="get" action="MayorElemento.php">
        <label for="numeros">Números (separados por coma):</label>
        <input type="text" name="numeros" id="numeros" placeholder="1,2,4,56,3,6" required />
        <input type="submit" name="buscar" value="Buscar Mayor" />
    </form>

    <?php
    // Procesar la entrada usando método GET
    if (isset($_GET["buscar"])) {
        $entrada = isset($_GET["numeros"]) ? trim($_GET["numeros"]) : "";

        if ($entrada === "") {
            echo "<p>Por favor ingresa números separados por coma.</p>";
        } else {
            
            $numeros_str = explode(",", $entrada);
            $numeros = [];
            
            
            foreach ($numeros_str as $num) {
                $num_limpio = trim($num);
                if (is_numeric($num_limpio)) {
                    $numeros[] = floatval($num_limpio);
                }
            }
            
            if (count($numeros) === 0) {
                echo "<p>No se encontraron números válidos. Por favor ingresa números separados por coma.</p>";
            } else {
                
                $mayor = $numeros[0];
                $indice = 0;
                
                do {
                    if ($numeros[$indice] > $mayor) {
                        $mayor = $numeros[$indice];
                    }
                    $indice++;
                } while ($indice < count($numeros));
                
                echo "<h2>Resultado:</h2>";
                echo "<p><strong>Números ingresados:</strong> " . htmlspecialchars($entrada) . "</p>";
                echo "<p><strong>Mayor elemento:</strong> " . htmlspecialchars($mayor) . "</p>";
            }
        }
    }
    ?>
</body>

</html>