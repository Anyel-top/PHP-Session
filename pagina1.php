<?php

session_start();
$_SESSION ['nombre'] = "Angel";
$_SESSION ['apellido'] = "Patiño";
echo '<a href="pagina2.html"> Ir a pagina 2 </a>';

?>