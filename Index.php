<?php
// --- VARIABLES DEL SERVIDOR ---
// Aquí preparamos todos nuestros datos. ¡El "cerebro" de la página!

$titulo = "¡La Mina de Oro de Steve!";
$anio_actual = 2025; // Lo usaremos en el pie de página

// He cambiado tu array por un "array asociativo".
// Ahora, cada producto (la "clave") tiene un precio (el "valor").
// Esto es mucho más potente para una tienda.
$productos_oro = [
    "Lingote de Oro" => 36,
    "Pepita de Oro" => 4,
    "Bloque de Oro" => 324,
    "Manzana de Oro" => 320,
    "Zanahoria de Oro" => 32
];

// La misma imagen que tenías
$imagen = "https://cdn.alfabetajuega.com/alfabetajuega/2020/06/alfabetajuega-guia-oro-minecraft-02-15062020.jpg";

$bienvenida = "¡Bienvenido, minero! Revisa nuestros precios del oro. (Precios en Esmeraldas)";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Usamos el título que definimos en PHP -->
    <title><?php echo $titulo; ?></title>
    
    <!-- Importamos una fuente pixelada que se parece a Minecraft -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <!--
      --- CSS INTEGRADO ---
      Aquí es donde ocurre la magia del diseño.
      Todo esto es HTML (<style>), pero le da el aspecto de Minecraft.
    -->
    <style>
        /* Reseteo básico y fuente para toda la página */
        body {
            font-family: 'Press Start 2P', cursive;
            background-color: #3E3E3E; /* Gris oscuro del juego */
            color: #FFFFFF; /* Texto blanco */
            margin: 0;
            padding: 20px;
            /* Imagen de fondo sutil que recuerda a la piedra */
            background-image: url('https://www.transparenttextures.com/patterns/cubes.png');
            background-repeat: repeat;
        }

        /* Contenedor principal de la tienda */
        .tienda-container {
            max-width: 900px;
            margin: 20px auto;
            background-color: rgba(10, 10, 10, 0.75); /* Fondo de UI de Minecraft */
            border: 5px solid #5C5C5C; /* Borde de piedra */
            border-radius: 8px; /* Ligeramente redondeado */
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            overflow: hidden; /* Para contener los bordes */
        }

        /* Encabezado con el título */
        header {
            background-color: #2A2A2A; /* Un poco más oscuro */
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #5C5C5C;
        }

        /* El h1 que viene de PHP */
        header h1 {
            color: #FFFF55; /* Amarillo brillante, como el oro */
            font-size: 1.8rem;
            text-shadow: 2px 2px #333; /* Sombra de texto */
            margin: 0;
        }

        /* Mensaje de bienvenida */
        .bienvenida {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            background-color: rgba(0,0,0,0.2);
            line-height: 1.5;
        }
        
        /* Contenido principal */
        main {
            padding: 20px;
        }

        /* La imagen principal */
        .banner-img {
            width: 100%;
            max-width: 100%;
            height: auto;
            border: 5px solid #C6C6C6; /* Borde gris claro */
            border-radius: 4px;
            margin-bottom: 30px;
        }

        h2 {
            color: #FFAA00; /* Naranja de Minecraft */
            font-size: 1.2rem;
            border-bottom: 2px dashed #5C5C5C;
            padding-bottom: 10px;
        }

        /* --- La Lista de Productos Interactiva --- */
        .lista-productos {
            list-style: none; /* Quitamos los puntos de la lista */
            padding: 0;
        }

        .lista-productos li {
            background-color: #C6C6C6; /* Color de botón de piedra */
            color: #3E3E3E; /* Texto oscuro */
            padding: 15px;
            margin-bottom: 10px;
            border: 3px solid #808080;
            box-shadow: 3px 3px 0px #5C5C5C; /* Sombra de bloque 2D */
            font-size: 1rem;
            cursor: pointer; /* Manito para indicar que es clickeable */
            transition: all 0.1s ease;
            
            /* Usamos Flexbox para alinear el nombre y el precio */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* --- INTERACTIVIDAD --- */
        .lista-productos li:hover {
            background-color: #FFFFAA; /* Se ilumina en amarillo oro */
            color: #000;
            transform: scale(1.02); /* Se hace un poco más grande */
        }
        
        .lista-productos li:active {
            background-color: #55FF55; /* Verde esmeralda al hacer clic */
            transform: scale(0.98); /* Se hunde */
            box-shadow: 1px 1px 0px #5C5C5C;
        }

        /* Estilo para el precio */
        .precio {
            color: #00AA00; /* Verde esmeralda */
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* Icono de esmeralda (hecho con CSS) */
        .precio::before {
            content: '♦'; /* Símbolo de diamante que parece esmeralda */
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Pie de página */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2A2A2A;
            border-top: 5px solid #5C5C5C;
            font-size: 0.8rem;
            color: #AAAAAA;
        }

    </style>
</head>
<body>

    <!-- Contenedor principal de la tienda -->
    <div class="tienda-container">
        
        <!-- Encabezado con el título de PHP -->
        <header>
            <h1><?php echo $titulo; ?></h1>
        </header>

        <!-- Mensaje de bienvenida de PHP -->
        <p class="bienvenida"><?php echo $bienvenida; ?></p>
        
        <!-- Contenido principal -->
        <main>
            <!-- Imagen de PHP -->
            <h2>¡Oro! ¡Oro! ¡Oro!</h2>
            <img class="banner-img" src="<?php echo $imagen; ?>" alt="Imagen de Oro de Minecraft" />

            <!-- Lista de productos de PHP -->
            <h2>Productos a la venta</h2>
            
            <ul class="lista-productos" id="lista-comprar">
                <?php
                // --- BUCLE FOREACH MEJORADO ---
                // Ahora recorremos el array asociativo.
                // $nombre guardará la clave (ej: "Lingote de Oro")
                // $precio guardará el valor (ej: 36)
                foreach ($productos_oro as $nombre => $precio) {
                    // Imprimimos el HTML dinámicamente
                    // Añadimos una clase 'precio' al span para darle estilo CSS
                    echo "<li onclick=\"comprarProducto('$nombre')\">
                            <span>$nombre</span>
                            <span class='precio'>$precio</span>
                          </li>";
                }
                ?>
            </ul>

        </main>

        <!-- Pie de página con el año de PHP -->
        <footer>
            <p>La Mina de Oro &copy; <?php echo $anio_actual; ?>. Todos los derechos reservados.</p>
        </footer>

    </div>
    
    <!--
      --- JavaScript Básico ---
      Para darle la interactividad al hacer clic.
    -->
    <script>
        function comprarProducto(nombreProducto) {
            // Esto es mucho mejor que un alert()
            // En un futuro, aquí podrías añadir el producto a un carrito
            console.log("¡Intento de compra de: " + nombreProducto + "!");
            
            // Creamos un mensaje temporal que aparece en la página
            const mensaje = document.createElement('div');
            mensaje.textContent = '¡Has hecho clic en "' + nombreProducto + '"!';
            mensaje.style.position = 'fixed';
            mensaje.style.bottom = '20px';
            mensaje.style.left = '50%';
            mensaje.style.transform = 'translateX(-50%)';
            mensaje.style.backgroundColor = '#55FF55';
            mensaje.style.color = '#000';
            mensaje.style.padding = '15px';
            mensaje.style.fontFamily = "'Press Start 2P', cursive";
            mensaje.style.borderRadius = '5px';
            mensaje.style.border = '3px solid #00AA00';
            mensaje.style.boxShadow = '3px 3px 0px #333';
            mensaje.style.zIndex = '1000';
            
            document.body.appendChild(mensaje);
            
            // Hacemos que el mensaje desaparezca después de 3 segundos
            setTimeout(function() {
                mensaje.remove();
            }, 3000);
        }
    </script>

</body>
</html>