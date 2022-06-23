<!doctype html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>MTM Publicidad</title>
      <!-- Llamamos la hoja de estilos style.css -->
      <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
      <link rel="stylesheet" href="/wordpress/wp-content/css/bootstrap.min.css">
      <script src="/wordpress/wp-content/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="/wordpress/wp-content/css/all.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    </head>
    <body style="margin:0;">
        <?php
        //Si hay posts publicados
        if (have_posts()):
            //Ciclo de todos los posts publicados
            while (have_posts()):
                //Llamamos al post
                the_post();
                ?>
                <!-- Escribimos el titulo dentro de un h2 -->

                <h2 class="titulo"> <?php the_title(); ?> </h2>

                <!-- Escribimos el contenido dentro de un div -->
                <div class="parrafo">

                <?php the_content(); ?>
                </div>
                <?php
            // Fin del ciclo que llama todos los posts
            endwhile;
        // Fin del if si hay post publicados
        endif;
        ?>
        <script type="text/javascript">
          var planta = 1;
          function cambiaPlanta(n) {
            var nombreSitio = document.getElementById('nombre-sitio').innerHTML;
            var habitaciones = document.getElementById('habitaciones').innerHTML;
            var supUtil = document.getElementById('sup-util').innerHTML;
            var supTerraza = document.getElementById('sup-terraza').innerHTML;
            var supTotal = document.getElementById('sup-total').innerHTML;
            var precio = document.getElementById('precio').innerHTML;
            var infoAdd = document.getElementById('info-add').innerHTML;
            switch (n) {
              case -2:
                planta += 1;
                break;
              case -1:
                planta -= 1;
                break;
              case 1:
                planta = 1;
                break;
              case 2:
                planta = 2;
                break;
              case 3:
                planta = 3;
                break;
              default:
                planta = 1;
                break;
            }
            switch (planta) {
              case 0:
                planta = 3;
                break;
              case 4:
                planta = 1;
                break;
              default:
                break;
            }
            switch (planta) {
              case 1:
                nombreSitio = "TIPO ESTUDIO 21";
                habitaciones = "2 Dormitorios・1 Baño"
                supUtil = "54";
                supTerraza = "3";
                supTotal = "57";
                precio = "UF 6.200*"
                infoAdd = "";
                break;
              case 2:
                nombreSitio = "TIPO ESTUDIO 22";
                habitaciones = "2 Dormitorios・1 Baño"
                supUtil = "48";
                supTerraza = "4";
                supTotal = "52";
                precio = "UF 5.800*"
                infoAdd = "";
                break;
              case 3:
                nombreSitio = "TIPO DEPTO 12";
                habitaciones = "3 Dormitorios・3 Baños"
                supUtil = "155";
                supTerraza = "32";
                supTotal = "240";
                precio = "UF 17.200*"
                infoAdd = "Depto. tipo loft y terreno exclusivo";
                break;
              default:
                nombreSitio = "TIPO ESTUDIO 21";
                habitaciones = "2 Dormitorios・1 Baño"
                supUtil = "54";
                supTerraza = "3";
                supTotal = "57";
                precio = "UF 6.200*"
                infoAdd = "";
                break;
            }
          }
        </script>
    </body>
</html>
