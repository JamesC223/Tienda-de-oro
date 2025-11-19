<html>

<html></head>

<body>
    <h1>Usuario de javascript</h1>

    
        <input id= "nombre" name="nombre" />
        <button id= "saludar" > Saludar</button>


    <script>
        console.log("jorge")
         /*imprimir en consola*/
        /*
        comst
        var
        let
        */
       var nombre = "jorge"
       let textoNombre = document.getElementById("nombre");

       let boton = document.getElementById("saludar");

       boton.addEventListener("click", () =>{
            console.log(textoNmbre.value);
       })
       console.log(boton, textoNombre)
       //alert("Tu nombre es " + nombre);

    </script>

</body>

</html>