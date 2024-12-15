<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión de Productos</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="public/css/styleindex.css" />
  </head>
  <body>
    <!-- Encabezado -->
    <header class="custom-header">
      <h1>Gestión de Productos</h1>
    </header>

    <!-- Contenedor principal -->
    <div class="table-container">
      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th>imagen</th>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
            <a href="form_agregar_producto.php" class="botonchafa">Agregar Productos</a>
          </tr>
        </thead>
        
        <?php
          $conexion = mysqli_connect("127.0.0.1:3306","root", "", "proyecto_backend");

          if($conexion  === false){
            echo "hubo un error de conexion";
            echo "<br>";
          }else{
                echo "se conecto";
                echo "<br>";
          }
           $query = "SELECT * FROM productos ";
           $resultado = mysqli_query($conexion,$query);
          while($unaFila = mysqli_fetch_assoc($resultado)){
           echo
            '<tbody>
              <tr>
                <td><img src="'.$unaFila["imagen_producto"].'" class="imagen-producto"></td>
                <td>'.$unaFila["id_producto"].'</td>
                <td>'.$unaFila["nombre_producto"].'</td>
                <td>'.$unaFila["precio_producto"].'</td>
                <td>'.$unaFila["stock_producto"].'</td>
                <td>
                  <a href="./form_editar_producto.php?id='.$unaFila["id_producto"].'"><button>Editar</button></a>
                  <a href="./eliminar_producto.php?id='.$unaFila["id_producto"].'"><button class="botoneli">Eliminar</button></a>
                </td>
              </tr>'              ;
          }
          mysqli_close($conexion);
          
        ?>
      </table>
     <a href="index.php" class="botonchafa" >Todo listo</a>
     <a href=""></a>
    </div>
  </body>
</html>
