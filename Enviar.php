<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ditamed.com.ve</title>
<script>
alert("¡Su mensaje se envio correctamente!");
location.href="http://www.ditamed.com";
</script>
</head>

<body  >
<p>
  <?php
  date_default_timezone_set('America/Caracas'); 

$mes_hoy = array ("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$dia_hoy = array("Domingo","Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "Sabado");
$fecha_hoy = $dia_hoy[date("w")]. ", ". date("j"). " de ". $mes_hoy[date("n")]. " de ". date("Y");
$hora = date(' h:i: A');

$todo = "$fecha_hoy  HORA:$hora";

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Fax = $_POST['Fax'];
$Localidad = $_POST['Localidad'];
$Ente = $_POST['Ente'];
$Mensaje = $_POST['Mensaje'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$todo=   " Nombre: " .$Nombre. ". \n\n".
            "Apellido:  " .$Apellido. ". \n\n".
            "Telefono: " .$Telefono. ".\n\n".
            " Email: " .$Email. ". \n\n".
            " Fax: " .$Fax. ". \n\n".
            " Localidad: " .$Localidad. ". \n\n".
            "Ente Que Representa: " . $Ente. ". \n\n".
            " Mensaje: " .$Mensaje. ". \n\n".
            " Enviado el:  " . $todo;

$para = 'informacion@ditamed.com';
$asunto = 'Formulario de Contacto';

mail($para, $asunto, utf8_decode($todo), $header);





?>
  
</p>

</body>
</html>

