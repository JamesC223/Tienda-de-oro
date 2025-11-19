<html lang="es">
<head>
  
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Suma 3 números</title>
  <style>body{font-family:Arial;padding:16px}</style>
</head>
<body>
  <h1>Suma 3 números</h1>
  <input id="a" type="number" placeholder="Número 1"> 
  <input id="b" type="number" placeholder="Número 2">
  <input id="c" type="number" placeholder="Número 3">
  <button id="go">Calcular</button>

  <script>
	document.getElementById('go').addEventListener('click', function(){
	  const a = Number(document.getElementById('a').value) || 0;
	  const b = Number(document.getElementById('b').value) || 0;
	  const c = Number(document.getElementById('c').value) || 0;
	  const suma = a + b + c;
	  alert('Suma: ' + suma);
	});
  </script>
</body>
</html>
	</div>


