<?php
    require_once ("ClassEmpleado.php");
    $objEmpleado = new Empleado(78978,"Andres Perez",25);
    $objEmpleado->setPuesto("Administrador");
    echo $objEmpleado->getDatosPersonales();
    echo $objEmpleado->getPuesto();