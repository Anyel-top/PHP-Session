<?php
session_start();
// vaciamos las variables
session_unset();
session_destroy();

echo "Se cerro la sesion correctamente";
$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
echo 'El nombre completo es: ' . $nombreCompleto;

?>