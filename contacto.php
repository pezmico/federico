<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Federico Mart&iacute;nez Galvis - Contacto</title>
<link href="styleinfo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="titulo">
<h1> <a href="/menu.php">Federico Martínez Galvis</a></h1>
</div>
<div id="contenido">
		<?php require_once '/home/gathacol/public_html/includes/analytics_global.html'; ?>
		<?php require_once '/home/gathacol/public_html/includes/logo_eterno_portafolios.html'; ?>
<h1 align="center">
  <?
if ($_POST['Submit']){
$name = $_POST['name'];
$email = $_POST['email'];
$ip = $_SERVER['REMOTE_ADDR'];
$message = $_POST['message'];
$emailaddress = "martinezgalvis@gmail.com";
$subject = "Mensaje enviado desde tu portafolio Gathacol";
$cabeceras = "To: $emailadress" . "\r\n" . "From: $email" . "\r\n";
$mensaje = "$message". "\r\n". "\r\n" . "Mensaje enviado por" . "\r\n" . "$name";
mail($emailaddress,$subject,$mensaje,$cabeceras);
require_once('gracias.php');
}
else
{
?>
  <br /></h1>
  <p class="plustext"><h2>Contacto</h2></p>
  <div align="center" id="formulario">
<div id="inputs">
<form name="form1" method="post" action="contacto.php">
  <div align="left">Su Nombre:<br />
       <input name="name" type="text" class="formulario-input" value="nombre" size="40" maxlength="30">
       <br>
    Su Email:<br />
    <input name="email" type="text" class="formulario-input" value="email@dominio.com" size="40">
    <br>
    Mensaje:<br>
    <textarea name="message" cols="60" rows="10" class="formulario-input">Su mensaje</textarea>
    <br />
    <br>
    <input type="submit" name="Submit" value="Enviar" class="boton">
    <br>
  </div>
</form>
</div>
</div>
</div><?
}
?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3660281-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body>
</html>
