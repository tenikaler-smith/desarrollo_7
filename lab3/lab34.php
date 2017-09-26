<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 3.4</title>
</head>
<body>
    <?php
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['Apellido'] != "" && $_REQUEST['Nombre'] != "")
            {
                echo "El Apellido Ingresado es : $_REQUEST[Apellido]";
                echo "<br>";
                echo "El Nombre Ingresado es : $_REQUEST[Nombre]";
            }
            else
            {
                $vapellido = "";
                $vnombre = "";

                if ($_REQUEST['Apellido'] == ''){
                   $vapellido = "Favor Coloque el Apellido";
                }
                if ($_REQUEST['Nombre'] == ''){
                    $vnombre = "Favor Coloque el Nombre";
                }
                dibuja_formulario($vnombre, $vapellido);
            }
        }

        else{
            dibuja_formulario();
        }
        function dibuja_formulario($vnombre="", $vapellido=""){
            echo "<form action='lab34.php' method='POST' >";
            echo "<input type='Text' name='Nombre' placeholder='Nombre'> $vnombre <br><br>";
            echo "<input type='Text' name='Apellido' placeholder='Apellido'> $vapellido <br><br>";
            echo "<input type='submit' name='enviar' value='Enviar datos'>
            </from>";
        }
    ?>
</body>
</html>