<?php

$us_formu = $_POST['us'];
$cla_formu = $_POST['cl'];

include("conexion.php");

$resultado = mysqli_query($datos_conexion, "SELECT * FROM registro WHERE usuario='$us_formu' AND clave='$cla_formu'") or exit ("Error al conectarse con la base de datos");

if(mysqli_num_rows($resultado))
{
    while($row = mysqli_fetch_row($resultado)>0)
    {
        header("location: sesion.php?si");
    }

}
else
{
    header("location: sesion.php?no");
}


?>