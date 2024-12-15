<?php

$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");


if($conexion  === false){
    echo "hubo un error de conexion";
    echo "<br>";
  }else{
        echo "se conecto";
        echo "<br>";
  }
  
$id_producto = $_POST['id_producto'];
$nombre_producto = mysqli_real_escape_string($conexion, $_POST['nombre_producto']);
$precio_producto = floatval($_POST['precio_producto']);
$stock_producto = intval($_POST['stock_producto']);

// Procesar la imagen si se sube una nueva
if (!empty($_FILES['imagen_producto']['tmp_name'])) {
    $type = pathinfo($_FILES['imagen_producto']['name'], PATHINFO_EXTENSION);
    $data = file_get_contents($_FILES['imagen_producto']['tmp_name']);
    $imagen_base64 = "data:image/" . $type . ";base64," . base64_encode($data);
} else {
    // Si no se sube una imagen nueva, mantener la actual
    $query_imagen = "SELECT imagen_producto FROM productos WHERE id_producto = $id_producto";
    $resultado_imagen = mysqli_query($conexion, $query_imagen);
    $fila = mysqli_fetch_assoc($resultado_imagen);
    $imagen_base64 = $fila['imagen_producto'];
}

$query_update = "
    UPDATE productos 
    SET 
        nombre_producto = '$nombre_producto',
        precio_producto = $precio_producto,
        stock_producto = $stock_producto,
        imagen_producto = '$imagen_base64'
    WHERE id_producto = $id_producto
";

if (mysqli_query($conexion, $query_update)) {
    header('Location: productosadm.php');
} else {
    echo "Error al actualizar el producto: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
