<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 10.2</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<H1><center>Consulta de Noticias</center></H1>
    <FORM NAME="FromFiltro" method="post" action="lab102.php">
        <BR/><br>
        Filtrar por: <SELECT name="campos">
            <OPTION value="texto" selected>Descripción
            <OPTION VALUE="titulo">Titulo
            <OPTION value="categoria">Categoria
        </SELECT>
        con el valor:
        <input type="text" name="valor">
        <INPUT TYPE="submit" NAME="ConsultarFiltro" value="Filtrar Datos" class="btn-default">
        <INPUT TYPE="submit" NAME="ConsultarTodos" value="Ver Todos" class="btn-primary">
    </FORM>
    <br>
    <?php
        require_once ("class/noticias.php");

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias();

        if (array_key_exists('ConsultarTodos', $_POST)){
            $obj_noticia = new noticia();
            $noticias_new = $obj_noticia->consultar_noticias();
        }
        if (array_key_exists('ConsultarFiltro', $_POST)){
            $obj_noticia = new noticia();
            $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
        }

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
            print ("No hay noticias disponibles");
        }
    ?>
</body>
</html>




