<?php
session_start();
if($_SESSION['usuario']!= null){
    session_unset();
    session_destroy();
    header("location: index.html");
}else{
    header("location: index.html");
}

?>