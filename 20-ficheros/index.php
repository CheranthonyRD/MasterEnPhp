<?php

// abrimos el archivo y lo almacenamos
// en una variable
$archivo = fopen("fichero.txt", "r");

// mientras el archivo tenga contenido
// seguira leyendo
while(!feof($archivo))
{
    $contenido = fgets($archivo);
    echo $contenido;
    echo "<br>";
}
//cerramos el archivo
fclose($archivo);

?>