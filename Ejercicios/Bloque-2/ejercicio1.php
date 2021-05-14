<?php
include 'funciones.php';

// Ejercicio1. hacer un programa en php que tenga
// un array con 8 numeros enteros y haga lo
//  siguiente:

//  - Recorrerlo y mostrarlo
//  - Ordenarlo y mostrarlo
//  -  Mostrar su longitud
//  - buscar algun elemento

// Recorrerlo y mostrarlo

$numeros = [16,10,7,22,67,5,21,6];
$hola = '';
echo "<h1>" . "Mostrando Arrays" . "</h1>";

mostrandoArray($numeros);
echo "<hr>";

// ordenar y mostrar

echo "<h2> Ordenando Array" . "</h2>";
$ordenado = ordenarArray($numeros);

mostrandoArray($ordenado);
echo "<hr>";
// Mostrar su longitud

echo "<h2> Mostrando Longitud del array" . "</h2>";

$longitud = mostraLongitudArray($numeros);

echo "Longitud del Array Es: " . $longitud;

echo "<hr>";

// buscar elemento en array
echo "<h2> Buscando Elemento" . "</h2>";
$numero_buscar = buscarElemento(78, $numeros);

if ($numero_buscar  == false) {
   echo "Este indice no existe en el array";
} else {
    echo "Indice del array buscado es: " .$numero_buscar;
}

echo "<h2> Probando Array" . "</h2>";

?>