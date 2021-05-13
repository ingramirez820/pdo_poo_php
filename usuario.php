<?php

require_once('ClassUsuario.php');
$objUsuarioUno= new Usuario('Andres cardona','andres@info.com','Admin');
echo $objUsuarioUno->getPerfil();
?>