<?php
$nom_form=$_POST['nom'];
$mail_form=$_POST['correo'];
$msg_form=$_POST['msg'];

$informacion="Nombre: ".$nom_form."\r\n"."Email: ".$mail_form."\r\n"."Mensaje: ".$msg_form;

$remitente="From:  $nom_form <$mail_form>";

@mail("majitohiramatsu@gmail.com", "Consulta enviada desde el sitioWeb.com", $informacion, $remitente);

$respuesta="Estimad: "."\r\n"."Hemos recibido su consulta, en breve estaremos respondiendo su mensaje."."\r\n"."Gracias por contactarse";

@mail($mail_form, "Hemos recibido su consulta por nuestro sitioWeb.com", $respuesta);

include("conexion.php");

/*
CREATE TABLE contacto(idmensaje int NOT NULL AUTO_INCREMENT, nombre VARCHAR(50), mail VARCHAR(100), mensaje VARCHAR(2000), PRIMARY KEY(idmensaje));
*/

mysqli_query($datos_conexion, "INSERT INTO contacto VALUES(DEFAULT, '$nom_form', '$mail_form', '$msg_form')");

header("location: formulario.php?ok");


?>