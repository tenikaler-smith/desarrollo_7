<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laboratorio 2.5</title>
    </head>
    <body>
        <?php
            $figuras = array('cuadrado', 'triángulo', 'circulo');
            $figuras[1] = 'rectángulo';
            mostrar_figuras($figuras, "asignación de rectangulo");

            array_push($figuras, 'pentagono');
            mostrar_figuras($figuras, "adición de pentagono al final");

            array_unshift($figuras, 'hexagono');
            mostrar_figuras($figuras, "adicion de pentagono al inicio");

            array_pop($figuras);
            mostrar_figuras($figuras, "eliminacion del ultimo");

            array_shift($figuras);
            mostrar_figuras($figuras, "eliminacion de primero");

            function mostrar_figuras($figuras, $mensaje){
                echo "<br>Arreglo despues de $mensaje <br>";
                foreach($figuras as $figura){
                    echo "$figura <br>";
                }
        }
        ?>
    </body>
</html>