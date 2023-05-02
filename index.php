<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Carta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php
  if (file_exists('./xml/carta.xml')) {
      $films = simplexml_load_file('./xml/carta.xml');
  } else {
      exit('Error abriendo archivo XML con los datos de la carta.');
  }
?>
<!--Tabla de datos-->
<div>
  <div>
    <div class="col-12">
      <h1 class="titulo">CARTA</h1>
    </div>
      <?php
        if(isset($_GET['tipo'])){
          foreach($menu->plato as $plato){
            if($_GET['tipo']==$plato['tipo']){
              echo '<tr>';
                echo '<td>'.$plato->nombre.'</td>';
                echo '<td class="hidden">'.$plato->precio.'</td>';
                echo '<td>'.$plato->descripcion.'</td>';
              echo '</tr>';
            }
          }
        }
        else{
          foreach($menu->plato as $plato){
            echo '<tr>';
              echo '<td>'.$plato->nombre.'</td>';
              echo '<td class="hidden">'.$plato->precio.'</td>';
              echo '<td>'.$plato->descripcion.'</td>';
            echo '</tr>';
          }
        }
      ?>
  </div>
</div>
</body>
</html>
<?php

?>