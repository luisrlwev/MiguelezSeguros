<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST["nombre"]!="" && $_POST["apellido"]!="" && $_POST["correo"]!="" && $_POST["mensaje"]!=""){

$nombre = '';
$apellido = '';
$correo = '';
$chksegurosempresas = '';
$chksegurosempresasgmm = '';
$chksegurosempresasvida = '';
$chksegurosempresasflotillas = '';
$chksegurosempresasdanos = '';
$chksegurospersonas = '';
$chksegurospersonasgmm = '';
$chksegurospersonashogar = '';
$chksegurospersonasautos = '';
$chksegurospersonasvida = '';
$chksegurospersonasera = '';
$chkfianzas = '';
$mensaje = '';

if (isset($_POST['nombre'])) { // <= true
    $nombre = $_POST['nombre'];
}

if (isset($_POST['apellido'])) { // <= true
    $apellido = $_POST['apellido'];
}

if (isset($_POST['correo'])) { // <= true
    $correo = $_POST['correo'];
}

if (isset($_POST['mensaje'])) { // <= true
    $mensaje = $_POST['mensaje'];
}

if (isset($_POST['chk-seguros-empresas'])) { // <= true
    $chksegurosempresas = "checked";
}

if (isset($_POST['chk-seguros-empresas-gmm'])) { // <= true
    $chksegurosempresasgmm = "checked";
}

if (isset($_POST['chk-seguros-empresas-vida'])) { // <= true
    $chksegurosempresasvida = "checked";
}

if (isset($_POST['chk-seguros-empresas-flotillas'])) { // <= true
    $chksegurosempresasflotillas = "checked";
}

if (isset($_POST['chk-seguros-empresas-danos'])) { // <= true
    $chksegurosempresasdanos = "checked";
}

if (isset($_POST['chk-seguros-personas'])) { // <= true
    $chksegurospersonas = "checked";
}

if (isset($_POST['chk-seguros-personas-gmm'])) { // <= true
    $chksegurospersonasgmm = "checked";
}

if (isset($_POST['chk-seguros-personas-hogar'])) { // <= true
    $chksegurospersonashogar = "checked";
}

if (isset($_POST['chk-seguros-personas-autos'])) { // <= true
    $chksegurospersonasautos = "checked";
}

if (isset($_POST['chk-seguros-personas-vida'])) { // <= true
    $chksegurospersonasvida = "checked";
}

if (isset($_POST['chk-seguros-personas-era'])) { // <= true
    $chksegurospersonasera = "checked";
}

if (isset($_POST['chk-fianzas'])) { // <= true
    $chkfianzas = "checked";
}

$to = 'joeloguillen@gmail.com';

$subject = 'Contacto de Miguelez Seguros y Fianzas';

$headers = "From: joel@wisewsisolutions.com\r\n";
$headers .= "CC: joel@wisewsisolutions.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><head></head><body>';
$message .= '<h1>Nuevo mensaje de contacto</h1><br /><br />';
$message .= 'Nombre: ' . $nombre . ' ' . $apellido;
$message .= '<br />Correo electr&oacute;nico: ' . $correo;
$message .= '<br />Inter&eacute;s: ';
$message .= '<br /><input type="checkbox" ' . $chksegurosempresas . '> <strong>Seguros Empresas</strong>';
$message .= '<input type="checkbox" ' . $chksegurosempresasgmm . '> GMM<br />';
$message .= '<input type="checkbox" ' . $chksegurosempresasvida . '> Vida<br />';
$message .= '<input type="checkbox" ' . $chksegurosempresasflotillas . '> Flotillas<br />';
$message .= '<input type="checkbox" ' . $chksegurosempresasdanos . '> Da&nacute;os<br /><br /><br />';
$message .= '<input type="checkbox" ' . $chksegurospersonas . '> <strong>Seguros Personas</strong>';
$message .= '<input type="checkbox" ' . $chksegurospersonasgmm . '> GMM<br />';
$message .= '<input type="checkbox" ' . $chksegurospersonashogar . '> Hogar<br />';
$message .= '<input type="checkbox" ' . $chksegurospersonasautos . '> Autos<br />';
$message .= '<input type="checkbox" ' . $chksegurospersonasvida . '> Vida<br />';
$message .= '<input type="checkbox" ' . $chksegurospersonasera . '> Educaci&oacute;n, retiro, ahorro<br /><br />';
$message .= '<input type="checkbox" ' . $chkfianzas . '> <strong>Fianzas</strong>';
$message .= '<br />Mensaje: ' . $mensaje;
$message .= '</body></html>';

if(mail($to, $subject, $message, $headers))
  echo "ok";
else
  echo "error";
 
}else{
    echo "error";
}
?>
