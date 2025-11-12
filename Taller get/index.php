1.- Utilizando el siguiente arreglo:

$enfermedad = [
["gripe", "evitar el frio directo", 2],
["dolor de barriga", "evitar lacteos y comida que produzca gases",1],
["irritación de la piel", "evitar cremas y quimicos con ph alto que afecte la piel",3],
["fiebre", "descanso",4]
];

Escribir un programa que permita escribir la enfermedad, buscarla dentro del arreglo y mostrar la recomendación médica en pantalla, 
utilizando el método get, el tercer parámetro del arreglo indica los días de descanso que debe ordenar el médico.

<?php
$enfermedad = [
    ["gripe", "Evitar el frío directo, mantenerse hidratado y reposo.", 2],
    ["dolor de barriga", "Evitar lácteos y alimentos que produzcan gases; hidratarse.", 1],
    ["irritación de la piel", "Evitar cremas y químicos con pH alto; usar productos suaves.", 3],
    ["fiebre", "Reposo, controlar la temperatura y acudir al médico si aumenta.", 4]
];
?>

<html>

<head>
    <title>Formularioi</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $info; ?></p>

    <form id="form" method="get" action="index.php">
        <label for="nombre">Enfermedad:</label>
        <input name="nombre" id="nombre" />
        <input type="submit" name="enviar" value="Buscar" />
    </form>

    <?php
    
    if (isset($_GET["enviar"])) {
        $nombre = isset($_GET["nombre"]) ? trim($_GET["nombre"]) : "";

        if ($nombre === "") {
            echo "<p>Por favor ingresa el nombre de una enfermedad.</p>";
        } else {
            $buscado = mb_strtolower($nombre);
            $encontrado = false;

            foreach ($enfermedad as $item) {
                
                if (mb_strtolower($item[0]) === $buscado) {
                    $encontrado = true;
                    $recomendacion = $item[1];
                    $dias = $item[2];
                    echo "<h2>Resultado para: " . htmlspecialchars($item[0]) . "</h2>";
                    echo "<p><strong>Recomendación médica:</strong> " . htmlspecialchars($recomendacion) . "</p>";
                    echo "<p><strong>Días de descanso indicados:</strong> " . intval($dias) . " día(s)</p>";
                    break;
                }
            }

            if (! $encontrado) {
                echo "<p>No se encontró la enfermedad '<strong>" . htmlspecialchars($nombre) . "</strong>' en la lista.</p>";
            }
        }
    }
    ?>
</body>

</html>
