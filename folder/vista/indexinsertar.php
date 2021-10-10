<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/estilo3.css">
</head>
<ul>
        <li id=""><a href="">REGISTRAR PRODUCTO</a></li>
		<li><a href="../vista/indexlistar.php">MOSTRAR PRODUCTOS</a></li>

</ul>
</head>
<body>

        
    <form action="../controlador/controladorregistro.php", method="GET">
     <div class="form">
        <h1>FORMULARIO <br> DE PRODUCTOS</h1>
            <div class="grupo">    
                <input type="text" name="idProducto" id="idProducto" required><span class="barra"></span>
                <label for="">Id Producto</label>
            </div>
            <div class="grupo"> 
                <input type="text" name="nombre" id="nombre" required><span class="barra"></span>
                <label for="">Nombre</label>    
            </div>
            <div class="grupo"> 
                <input type="text" name="descripcion" id="descripcion"  required><span class="barra"></span>
                <label for="">Descripcion</label>    
            </div>      
            <div class="grupo"> 
                <input type="text" name="precio" id="precio" required><span class="barra"></span>
                <label for="">Precio</label> 
            </div>  
                <button id="but"><input id="inpu" type="submit" name="boton" value="Insertar Registro" ></button>
    </div>  
    <button id="but"><a id="b" href="inicio.php">REGRESAR</a></button>
    </form>  
</body>
</html>