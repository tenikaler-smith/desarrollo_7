<?php
    $tipo_imagen = $_FILES['nombre_archivo_file']['type'];

    if ($tipo_imagen != ".jpg" || $tipo_imagen != ".jpeg" || $tipo_imagen != ".png" || $tipo_imagen != ".gif") {
        if (is_uploaded_file($_FILES['nombre_archivo_file']['tmp_name'])) {
            $nombreDirectorio = "archivos/";
            $nombrearchivo = $_FILES['nombre_archivo_file']['name'];
            $nombreCompleto = $nombreDirectorio . $nombrearchivo;

            if (is_file($nombreCompleto)) {
                $idUnico = time();
                $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambiara el nonbre a $nombrearchivo <br><br>";
            }
            move_uploaded_file($_FILES['nombre_archivo_file']['tmp_name'], $nombreDirectorio . $nombrearchivo);

            echo "La imagen se ha subido satisfactoriomente $nombreDirectorio <br>";
        } else {
            echo "no se ha podido subir la imagen <br>";
        }
    } else {echo "solo se permite imagenes de tipo JPG, JPEG, PNG Y GIF";}
?> 