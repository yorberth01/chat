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

  <script>
    function ajax() {
      var red=new XMLHttpRequest();
      red.onreadystatechange=function () {
        if(red.readyState==4&&red.status==200){
          document.getElementById("chat").innerHTML=red.responseText;

        }
      }
      red.open('GET', 'chat.php', true);
      red.send();
    }
  </script>
</head>
<body onload="ajax();">

  <div id="contenedor">
    <div id="caja-chat">
      <div id="chat"></div>
    </div>

    <form action="index.php" method="POST">
      <input type="text" name="nombre" placeholder="ingresa tu nombre">
      <textarea name="mensaje" id="" cols="20" rows="5" placeholder="ingresa tu mensaje"></textarea>
      <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php 
      if (isset($_POST['enviar'])) {
        $nombre=$_POST['nombre'];
        $mensaje=$_POST['mensaje'];

          $insertar="INSERT INTO chat(nombre, mensaje) VALUES(:nombre, :mensaje)";
          $resultado_insert= $conexion->prepare($insertar);
          $resultado_insert->execute([':nombre' => $nombre, ':mensaje' => $mensaje]);

          if ($resultado_insert) {
            echo "<embed loop='false' src='deep.mp3' hidden='true' autoplay='true'";
          }

      }
    ?>

  </div>
  
</body>
</html>