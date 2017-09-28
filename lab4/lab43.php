<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
 <style>
     table.table{
          position: center;
     }
     td.resultado{
         padding-left: 100px;
     }
 </style>
</head>

<body>
<?php

IF(array_key_exists('enviar', $_POST)) {
    if ($_REQUEST['texto'] != "") {
    $texto = $_POST['texto'];
    $vocales = substr_count($texto, 'a')
        +substr_count($texto, 'e')
        +substr_count($texto, 'i')
        +substr_count($texto, 'o')
        +substr_count($texto, 'u')
        +substr_count($texto, 'A')
        +substr_count($texto, 'E')
        +substr_count($texto, 'I')
        +substr_count($texto, 'O')
        +substr_count($texto, 'U');

    echo "<table class='table' border = 1>";
    echo "<td > Texto Introducido: ".  $texto."</td><br>";
    echo "<td class='resultado'>Resultado: " . $vocales."  Vocales</td>";
    echo "</table>";

    }else{
        $texto = "";
        if ($_REQUEST['texto'] == ''){
            $texto = "Favor ingrese una palabra o frase";
        }
        dibuja_formulario($texto);
    }
}
else{
    dibuja_formulario();
}
function dibuja_formulario($texto="")
{
    echo "<center><br>";
    echo "<br><br>Muestra la cantidad de Vocales que contiene el texto<br><br>";   
    echo "<form action='lab43.php' method='POST'>";
    echo "<input type='text' name='texto' placeholder='introdudusca un texto...'>";
    echo "<input type='submit' name='enviar' value='Contar vocales'>
          </from>";
    echo "</center>";
}
?>
</body>
</html>