<?php
include 'funciones.php';

// hacer un programa que compruebe si una variable
// esta vacia y si esta vacia, rellenarla con
// texto en minusculas y mostrarlo en maayuscula
// y negrita



$variable = "";

$r = VariableVacia($variable);
echo "<h1> Texto en minuscula <br>" . $r . "</h1>" ;

echo "<hr>";

echo "Texto convertido a mayuscula";
$r = strtoupper($r);
echo "<hr>";
echo $r;



?>