<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos.css">
    <title>Document</title>
</head>
<body>
<form action="/procesar_datos" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="mensaje">telefono:</label><br>
        <input type="number" id="telefono" name="telefono"><br>
        <label for="libro">Libro:</label><br>
        <input type="text" id="Libro" name="libro"><br>
        <label for="fecha1">Fecha que fue entregado:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <label for="fecha"2>Fecha que fue recibido:</label><br>
        <input type="date" id="fecha" name="fecha"><br>
        <input type="submit" value="Enviar">
      </form>
</body>
</html>