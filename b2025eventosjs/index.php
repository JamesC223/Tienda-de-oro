<html>
<head>
    <style>
        #animation{
            border: 2px solid black;
            margin-top:20px;
            padding: 10px;
            color: #bfff00ff;
            bacikground-color: #2c73b5ff;

        }
    </style>
</head>

<body>
    <input type="texto" id="texto"/>
    inpurt type="text" id= "texto"/>
    <label for="backgroundcolor"> Color de fondo:</label>
    <input type= "color" id= "backgrundcolor"/>


    <div id= "animado" ></div>

    <script>
        let cajaTexto = document.getElementoById("texto");
        let divAnimacion = document.getElementById("ainimacion");
        let backgroundcolor = document.getElemntoById("backgroundcolor");
        Backgroundcolor.addEventListener("change", ()=>{
            divAnimacion.style.backgroundcolor = backgrouncolor.value;
        })
        cajaTexto.addEventlistenr("Keydown", ()=>{
            divAnimacion.inmerHTML = cajaTexto.value
        })
    </script>
>/body>
</html>
