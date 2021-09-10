<?php
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$carrera = $_POST['carrera'];

echo "<h3>Se ha inscripto con exito verifique sus datos:</h3>";
echo "nombre de alumno : " . $nombre . "<br/>";
echo "dni : " . $dni . "<br/>";
echo "email de alumno: " . $email . "<br/>";
echo "escogió la carrera de : " . $carrera . "<br/>";
 
?>