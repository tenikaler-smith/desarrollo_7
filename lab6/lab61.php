<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 6.1</title>
</head>
<body>
<?php
if(array_key_exists('mostrar', $_POST)){
    if($_REQUEST['num']  != "")
    {
        $num = $_POST['num'];
        $num = [];
        echo "<table border = 1>";
        
        for ($n1 =1; $n1<=20; $n1++)
        {
            echo"<tr class='#'>";

            for($n2=1; $n2<=20; $n2++)
            {
                echo "<td>", $num=[], "</td>";
                $num[]= $num+1;
            }
            echo "</tr>";
        }
        echo "</table>";              
    }
    else
    {
        $num = "";
        if ($_REQUEST['num'] == ''){
            $num = "Favor escribe un numero";
        }
        
        dibuja_formulario($num);
    }
}

else{
    dibuja_formulario();
}
function dibuja_formulario($num=""){
    echo "<b>Despliega una matriciz de un numero impar</b><br><br>";
    echo "<form action='lab61.php' method='POST' >";
    echo "<input type='Text' name='num' placeholder='Numero...'> $num <br><br>";
    echo "<input type='submit' name='mostrar' value='Mostrar datos'>
         </from>";
}
?>
</body>
</html>