<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 6.1</title>
</head>
<body>
<?php
if(array_key_exists('mostrar', $_POST)){
    if($_REQUEST['n']  != "")
    {
        $n = $_POST['n'];
        $i=[];
        

        echo "<table border = 1>";
        
        for ($i=0; $i<=$n; $i++)
        {
            echo"<tr>";
            for($i=0; $i<=$i; $i++)
            {
                echo "<td>", $i, "</td>";
                $n = [$i];
            }
            echo "</tr>";
        }
        echo "</table>";              
    }
    else
    {
        $n = "";
        
        if ($_REQUEST['n'] == ''){
            $n = "Favor escribe un numero";
        }
        
        dibuja_formulario($n);
    }
}

else{
    dibuja_formulario();
}
function dibuja_formulario($n=""){
    echo "<form action='lab61.php' method='POST' >";
    echo "<input type='Text' name='n' placeholder='Numero'> $n <br><br>";
    echo "<input type='submit' name='mostrar' value='Mostrar datos'>
         </from>";
}
?>
</body>
</html>