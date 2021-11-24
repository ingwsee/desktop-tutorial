<?php
include "conexiondb.php";

$id = $_POST['id'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$mysqli = conexiondb();

$actualizar = $mysqli->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido',dni ='$dni' WHERE id='$id'");

header('Location: index.php');
