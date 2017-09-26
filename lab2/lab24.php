<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Laboratorio 2.4</title>
    </head>
    <body>
        <?php
            //Creación de un arrego array ("clave" => "valor")
            $personas = array("juan" => "Panamá",
                "john" => "USA",
                "eica" => "Finlandia",
                "kusanagai" => "Japon");

            //Recorrer todo el arreglo
            foreach($personas as $persona => $pais){
                print "$persona es de $pais<br>";
            }

            //Impresión especifica
            echo "<br>".$personas["juan"];
            echo "<br>".$personas["eica"];
        ?>
    </body>
</html>