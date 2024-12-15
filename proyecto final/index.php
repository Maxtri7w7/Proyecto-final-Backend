<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styleindex.css" />
  </head>
  <body>
    <a href="inc_ses.php" ><button class="boton">iniciar sesión</button></a>
    <h1 id="EspNat">Esperanza Nativa</h1>
    <br />
    <h2>¿Qué somos?</h2>
    <br />
    <p>El proyecto Esperanza Nativa busca empoderar a comunidades nativas mediante la evangelización, la formación de líderes locales y su capacitación como 
      maestros rurales, combinando valores espirituales y educación profesional para transformar sus aldeas desde adentro, con un enfoque intercultural
       y sostenible.</p>
    <br />
    <h2>¿Donde se nos puede encontrar?</h2>
    <br />
    <p>Nos ubicamos en el corazón de la Mesopotamia Argentina, trabajando directamente con las comunidades nativas. Nuestro centro de operaciones está en la Iglesia Centro Cristiano Misionero de Montecarlo, donde llevamos a cabo nuestras actividades de formación, evangelización y apoyo a las comunidades. También puedes encontrarnos en redes sociales y canales digitales, desde donde compartimos nuestros avances y proyectos.</p>
    <br />
    <h2>¿Cómo apoyarnos?</h2>
    </Br>
    <p>Puedes ser parte de este proyecto de transformación apoyándonos a través de donaciones económicas para sostener nuestros programas y la formación de líderes nativos, sumándote como voluntario en nuestras actividades misioneras y de desarrollo comunitario, ayudándonos a compartir nuestra misión y visión para llegar a más personas, o adquiriendo nuestros productos solidarios, elaborados en colaboración con las comunidades nativas, cuyos ingresos financian nuestras iniciativas.</p>
    <h2>Nuestros Productos:</h2>
    <div class="contenedor-productos">
      <?php
        $conexion = mysqli_connect("127.0.0.1:3306","root", "", "proyecto_backend");


        $query = "SELECT * FROM productos ";
        $resultado = mysqli_query($conexion,$query);
        while($unaFila = mysqli_fetch_assoc($resultado)){
          echo 
          '
            <div class="producto">
              <img
                src="'.$unaFila["imagen_producto"].'"
                
                class="imagen-producto"
              />
              
              <h2 class="titulo-producto">'.$unaFila["nombre_producto"].'</h2>
              <br>
              <p class="precio-producto">$'.$unaFila["precio_producto"].'</p>
              
              <button class="btn-comprar">reservar Ahora</button>
            </div>

          ';
        }

        mysqli_close($conexion);
      ?>
    </div>
    <br>
  </body>
</html>
