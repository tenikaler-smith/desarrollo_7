<!--
* Created by PhpStorm.
* User: Smith_Jimenez
* Date: 10/15/2017
* Time: 05:37-->

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 10.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <H1>Consulta de Noticias</H1>
    <?php
        require_once ("class/noticias.php");

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias();

        $nfilas = count($noticias);

        if ($nfilas > 0){
            print ("<TABLE>\n");
            print ("<TR>\n");
            print ("<th>Titulo</th>\n");
            print ("<TH>Texto</TH>\n");
            print ("<TH>Categoria</TH>\n");
            print ("<TH>Fecha</TH>\n");
            print ("<TH>Imagen</TH>\n");
            print ("</TR>");

            foreach ($noticias as $resultado){
                print ("<TR>");
                print ("<TD>".$resultado['titulo']."</TD>\n");
                print ("<TD>".$resultado['texto']."</TD>\n");
                print ("<TD>".$resultado['categoria']."</TD>\n");
                print ("<TD>".date("j/n/y",strtotime($resultado['fecha']))."</TD>\n");

                if($resultado['imagen'] != "") {
                    print ("<td><a target='_blank' href='img/" . $resultado['imagen'] . "'>
                            <img border='0' src='img/iconotexto.gif'></a></td>\n");
                }else{
                    print ("<td>&nbsp;</td>\n");
                    }
                    print ("</tr>\n");
            }
            print ("</TABLE>");
        }
        else{
            print ("No hay noticias disponobles");
        }

    ?>

</body>
</html>




