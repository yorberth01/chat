<?php 
include "db.php";

          $consulta="SELECT * FROM chat ORDER BY id ASC";
          $resultado= $conexion->query($consulta);
          while ($filas = $resultado->fetch(PDO::FETCH_BOTH)) {
        ?>

        <div id="datos-chat">
          <span class="nombre"><?php echo($filas['nombre']); ?></span>
          <span class="mensaje"><?php echo($filas['mensaje']); ?></span>
          <span class="hora"><?php echo formatearFecha($filas['fecha']); ?></span>
        </div>

        <?php } ?>