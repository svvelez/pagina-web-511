<?php

$numeroidentificacion=$_POST['numeroidentificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fechadenacimiento=$_POST['fechadenacimiento'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$estadocivil=$_POST['estadocivil'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$comentarios=$_POST['comentarios'];




print "<p>Numero identificacion: $numeroidentificacion </p>\n";
print "<p>Nombres: $nombres </p>\n";
print "<p>Apellidos: $apellidos </p>\n";
print "<p>Fecha de nacimiento: $fechadenacimiento </p>\n";
print "<p>Edad: $edad </p>\n";
print "<p>Sexo: $sexo </p>\n";
print "<p>Estado civil: $estadocivil </p>\n";
print "<p>Email: $email </p>\n";
print "<p>Sexo: $telefono </p>\n";
print "<p>Estado civil: $celular </p>\n";
print "<p>Email: $comentarios </p>\n";
?>
