<?php 
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chat</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <div id="contenedor">
    <div id="caja-chat">
      <div id="chat">
        <div id="datos-chat">
          <span class="nombre">Jenny:</span>
          <span class="mensaje">Hola</span>
          <span class="hora">10:04 am</span>
        </div>
      </div>
    </div>

    <form action="index.php" method="POST">
      <input type="text" name="nombre" placeholder="ingresa tu nombre">
      <textarea name="mensaje" id="" cols="20" rows="5" placeholder="ingresa tu mensaje"></textarea>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </div>
  
</body>
</html>