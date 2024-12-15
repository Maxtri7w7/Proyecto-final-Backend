<?php

echo "holaaaa";
$id_producto = $_GET["id"];
 if (isset($id_producto)){
    echo "slaio todo bien";
    if (!empty($id_producto)){
        echo "esta bien de vuelta" ;
        $conexion = mysqli_connect("127.0.0.1:3306","root", "", "proyecto_backend");

        if($conexion  === false){
          echo "hubo un error de conexion";
          echo "<br>";
        }else{
              echo "se conecto";
              echo "<br>";
        }
        $query= "DELETE FROM productos WHERE id_producto =". $id_producto;
        
        $resultado= mysqli_query($conexion, $query);

        mysqli_close($conexion);
          if ($resultado === true) {
            echo "listo capo";
            header('Location: productosadm.php');
          }
    }else{
        echo "esta vacio asi que no funciona";
    }
 }
?>