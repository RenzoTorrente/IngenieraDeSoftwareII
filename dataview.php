<?php
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$carrera = $_POST['carrera'];

if(empty($carrera) or empty($dni) or empty($carrera) or empty($email)){

    echo("<h2>No pudimos registrarte, algunos campos del formulario se encontraban vacios</h2>")

}else{
    echo "<h3>Se ha inscripto con exito verifique sus datos:</h3>";
    echo "nombre de alumno : " . $nombre . "<br/>";
    echo "dni : " . $dni . "<br/>";
    echo "email de alumno: " . $email . "<br/>";
    echo "escogió la carrera de : " . $carrera . "<br/>";

}

 
?>