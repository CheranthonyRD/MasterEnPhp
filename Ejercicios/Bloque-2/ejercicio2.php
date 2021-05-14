<?php
include 'funciones.php';
// ejercicio 2
// Escribir un programa con php que anada valores
// a un array mientras que su longitud sea menor a 120
// y luego mostrarlo por pantalla

$ingreso = array();


// while(count($ingreso) < 12)
// {
//     array_push($ingreso, "dgfdg");
// }

for ($i=1; count($ingreso) < 120 ; $i++) {


    array_push($ingreso, $i);


}

var_dump($ingreso);











?>