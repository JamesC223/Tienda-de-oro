2.- Ingresa una palabra palabra por GET y cuenta cuántas “a” contiene (minúscula).

<?php
$titulo = "Contador de letras 'a'";
$info = "Ingresa una palabra y contaremos cuántas letras 'a' minúscula contiene.";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $info; ?></p>

    <form method="get" action="palabra.php">
        <label for="palabra">Palabra:</label>
        <input type="text" name="palabra" id="palabra" required />
        <input type="submit" name="enviar" value="Contar" />
    </form>

    <?php
    // Procesar la entrada usando método GET
    if (isset($_GET["enviar"])) {
        $palabra = isset($_GET["palabra"]) ? trim($_GET["palabra"]) : "";

        if ($palabra === "") {
            echo "<p>Por favor ingresa una palabra.</p>";
        } else {
            // Contar las letras 'a' minúsculas usando substr_count
            $cantidad = substr_count($palabra, 'a');
            
            echo "<h2>Resultado:</h2>";
            echo "<p><strong>Palabra ingresada:</strong> " . htmlspecialchars($palabra) . "</p>";
            echo "<p><strong>Cantidad de 'a' minúscula:</strong> " . intval($cantidad) . "</p>";
        }
    }
    ?>
</body>

</html>