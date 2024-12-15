<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styleindex.css">
</head>
<body>
<div class="cont_form">
<form action="./agregar_producto.php" method="post" enctype="multipart/form-data" >
    <label for="nombre" class="labelagr">Nombre del producto</label> <br><input type="text" id="nombre_producto" name="nombre_producto">
    <br>
    <br>
    <label for="Precio"class="labelagr">Precio del producto</label><br> <input type="text" id="precio_producto" name="precio_producto">
    <br>
    <br>
    <label for="Stock" class="labelagr" >Stock del producto</label><br><input type="text" id="stock_producto" name="stock_producto">
    <br>
<br>
    <label for="Imagen" class="labelagr" >imagen del producto</label><br> <input type="file" id="imagen_producto" name="imagen_producto">
    <br>
<br>
    <button>Agregar</button><a href="agregar_producto.php"></a>

</form>
<br>
<br>
<a href="productosadm.php" class="botonchafa">Cancelar</a>
</div>

</body>
</html>
