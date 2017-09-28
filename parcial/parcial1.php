<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parcial 1</title>
    <style>
        table.tabla{
            border: 2em;
            border-color: darkblue;
            padding: 10%;
        }
    </style>
</head>
<body>
 <?PHP
      IF(array_key_exists('enviar', $_POST)) {
          if ($_REQUEST['peso'] != "" && $_REQUEST['altura'] != "") {

              echo "<table class='tabla'>";
              $peso = $_POST['peso'];
              $altura = $_POST['altura'];
              $IMC = $peso / $altura;
              echo "<thead>";
              echo "<tr style='background-color:cadetblue'>";
              echo "<th> IMC </th>";
              echo "<th> Clacificación </th>";
              echo "</thead>";
              echo "<tbody>";

              if ($IMC <= 18){
                  echo "<tr>";
                  echo "<td style='background-color:aquamarine'>su peso: "; echo round($IMC,2);echo"</td>";
                  echo "<td>Peso bajo valorar signos de desnutrición</td>";
                  echo "</tr>";
              }
              if($IMC >= 18 && $IMC <= 24.9 ){
                  echo "<tr>";
                  echo "<td style='background-color:aquamarine'>su peso: "; echo round($IMC,2);echo"  </td>";
                  echo "<td>Peso normal</td>";
                  echo "</tr>";
              }
              if ($IMC >= 25 && $IMC <= 26.9){
                  echo "<tr>";
                  echo "<td style='background-color:#ffd0c8'>su peso: "; echo round($IMC,2);echo"</td>";
                  echo "<td><strong>Sobrepeso</strong></td>";
                  echo "</tr>";
              }
              if($IMC == 27 ){
                  echo "<tr >";
                  echo "<td style='background-color:#ffd0c8'>su peso: "; echo round($IMC,2);echo"  </td>";
                  echo "<td><strong>Obesidad</strong></td>";
                  echo "</tr>";
              }
              if($IMC >=27 && $IMC <= 29.9 ){
                  echo "<tr >";
                  echo "<td style='background-color:red'>su peso: "; echo round($IMC,2);echo"  </td>";
                  echo "<td><strong>Obesidad grado I.</strong>Riesgo relativo <strong>alto</strong> para desarrollar enfermedades cardiovasculares</td>";
                  echo "</tr>";
              }
              if ($IMC >=30 && $IMC <= 39.9){
                  echo "<tr >";
                  echo "<td style='background-color:red'>su peso: "; echo round($IMC,2);echo"</td>";
                  echo "<td><strong>Obesidad grado II.</strong> </strong>Riesgo relativo <strong>muy alto</strong> para el desarrollo enfermedades cardiovasculares</td>";
                  echo "</tr>";
              }
              if($IMC >= 40 ){
                  echo "<tr >";
                  echo "<td style='background-color:crimson'>su peso: "; echo round($IMC,2);echo"  </td>";
                  echo "<td><strong>Obesidad grado III EXTREMA O Mórbido.</strong></strong>Riesgo relativo <strong>extremadamente alto</strong> para el desarrollo enfermedades cardiovasculares</td>";
                  echo "</tr>";
              }

              echo "</tbody>";
              echo "</table>";

          }
          else
              {
                  $peso = "";
                  $altura = "";
                  if ($_REQUEST['peso'] == ''){
                     $peso = "favor ingrese un valor numerico";
                  }
                  if ($_REQUEST['altura'] == '') {
                      $altura = "favor ingrese un valor numerico";
                  }
                  formulario($peso,$altura);
              }
      }
      else{
          formulario();
      }
      function formulario($peso= "", $altura=""){
        echo"<form action='parcial1.php' method='POST'>";
        echo "<input type='text' name='peso' PLACEHOLDER='ingrese su peso' value=''>$peso<br><br>";
        echo "<input type='text' name='altura' placeholder='ingrese su altura' value=''>$altura<br><br>";
        echo "<input type='submit' name='enviar' value='CALCULAR'>
      </form>";
    }
?>
</body>
</html>
