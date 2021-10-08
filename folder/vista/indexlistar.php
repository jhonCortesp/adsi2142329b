<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo4.css">
    <title>Listar</title>    
</head>
<ul>
		<li><a href="../vista/indexinsertar.php">REGISTRAR PRODUCTO</a></li>
        <li><a href="../vista/inicio.php">INICIO</a></li>

</ul>
<body>
    <div class="div">
    <table class="table">
    <div class="div">
    <table class="table">
            <caption>LISTADO DE APRENDICES</caption>
            <thead>
                <tr>
                    <th id="th">ID  PRODUCTO</th>
                    <th id="th">NOMBRE</th>
                    <th id="th">DESCRIPCION</th>
                    <th id="th">PRECIO</th>
                    <th id="th">MODIFICAR</th>
                </tr>
            </thead>
            <?php
            include "../controlador/controladorlistar.php";
                foreach ($Producto as $key) {
               ?>
               <tr>
               <td><?php  echo $key->getIdProducto() ?></td>
                <td><?php  echo $key->getNombre()?></td>
                <td><?php  echo $key->getDescripcion()?></td>
                <td><?php  echo $key->getPrecio() ?></td>
            <td>  
            <a href="../controlador/controladorelimi.php?idProducto=<?php echo $key->getIdProducto();?>"><input type="submit" value="Eliminar" ></a>
            <td>
            
            
            <a href="../controlador/controladoractuali.php?idProducto=<?php echo $key->getIdProducto();?>"><input type="submit" value="Actualizar" ></a>   
            </td>  
            <?php
                }
                ?>
           
            </tr>
           
    </table>
    </div>
    </table>
    </div>
</body>

</html>