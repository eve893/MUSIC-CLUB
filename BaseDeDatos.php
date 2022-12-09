<?php
//conectamos Con el servidor
$conectar=@mysql_connect ('localhost', 'root', '');
//verificamos conexion
if (!$conectar){
    echo "No se pudo conectar con el servidor";
}else{
    $base=mysql_select_db ('formulario');
    if (!$base){
        echo "no se encontro la base de datos";
    }
}

//recuperar variables
$nombres=$_POST ['nombre'];
$correos=$_POST ['correo'];
$Pregunta_1=$_POST ['agregar'];
$Pregunta_2=$_POST ['genero'];
$Pregunta_3=$_POST ['bandaa'];
$Pregunta_4=$_POST ['Bandaagr'];
$Pregunta_5=$_POST ['nombanda'];
$Pregunta_6=$_POST ['musico'];
$Pregunta_7=$_POST ['clases'];
$Pregunta_8=$_POST ['datos'];
//sentencia de msql
$sql="INSERT INTO datos VALUES ('$nombres', '$correos', '$Pregunta_1',
'$Pregunta_2', '$Pregunta_3', '$Pregunta_4', '$Pregunta_5', '$Pregunta_6',
'$Pregunta_7', '$Pregunta_8')";
//ejecutamos la sentencia de sql
$ejecutar = mysql_query ($sql);
//verificamos la ejecucion
if(!$ejecutar){
echo"Hubo Algun Error";
}else{
echo"Datos Guardados Correctamente<br><a href='formulario.html'>Volver</a>";
}
?>