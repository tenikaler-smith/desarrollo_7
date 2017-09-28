<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.2</title>
</head>
<body>
<?php
    IF(array_key_exists('enviar', $_POST)) {
        if ($_REQUEST['numero'] != "") {
            $numero = $_POST['numero'];

            $numero =  "";
        } else{
            $numero = "";

            if ($_REQUEST['ventas'] == ''){
                $numero = "Favor ingrese una cantidad";
            }
            dibuja_formulario($numero);
        }
    }
    else{
        dibuja_formulario();
    }
    function dibuja_formulario($numero=""){
        echo "<center>";        
        echo "Calcular un factorial de un número N <br><br>";
        echo "<form action='lab42.php' method='POST' >";
        echo "<input type='Text' name='numero' placeholder='Ingrese un Número'> $numero <br><br>";
        echo "<input type='submit' name='enviar' value='Calcular'>
              </from>";
        echo "</center>";
    }
?>

</body>
</html>