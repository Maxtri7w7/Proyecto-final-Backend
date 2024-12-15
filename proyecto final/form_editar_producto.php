<?php
// Conexión a la base de datos
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_backend");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener el ID del producto
$id_producto = $_GET['id'];

// Consulta para obtener los datos actuales
$query = "SELECT * FROM productos WHERE id_producto = $id_producto";
$resultado = mysqli_query($conexion, $query);

if ($fila = mysqli_fetch_assoc($resultado)) {
    $nombre = $fila['nombre_producto'];
    $precio = $fila['precio_producto'];
    $stock = $fila['stock_producto'];
    $imagen_base64 = $fila['imagen_producto']; // Imagen en formato base64
} else {
    echo "Producto no encontrado.";
    exit;
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="public/css/styleindex.css">
</head>
<body>
<div class="cont_form">
    <form action="editar_productos.php" method="post" enctype="multipart/form-data">
        <!-- ID del producto -->
        <input type="hidden" name="id_producto" value="<?php echo $id_producto; ?>">

        <!-- Campos editables -->
        <label for="nombre">Nombre del producto</label>
        <br>
        <input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo htmlspecialchars($nombre); ?>" required>
        <br><br>

        <label for="precio">Precio del producto</label>
        <br>
        <input type="text" id="precio_producto" name="precio_producto" value="<?php echo htmlspecialchars($precio); ?>" required>
        <br><br>

        <label for="stock">Stock del producto</label>
        <br>
        <input type="text" id="stock_producto" name="stock_producto" value="<?php echo htmlspecialchars($stock); ?>" required>
        <br><br>

        <label for="imagen">Imagen del producto</label>
        <br>
        <input type="file" id="imagen_producto" name="imagen_producto">
        <br>
        <img src="<?php echo htmlspecialchars($imagen_base64); ?>" alt="Imagen actual" style="width: 100px; height: auto;">
        <br><br>

        <button type="submit">Actualizar Producto</button>
    </form>
    <br>
    <a href="productosadm.php">Cancelar</a>
</div>
</body>
</html>
