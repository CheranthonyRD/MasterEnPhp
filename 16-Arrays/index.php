<?php

$peliculas = [
    "Batman",
    1,
    "Transformer"
];

$noPelicula = "Hola";

$peliculaVacia = '';

function verificarArray($array_pelicula)
{
   if (!empty($array_pelicula)) {

    return $array_pelicula;
   }

   else{
       return  "Esta variable esta vacia";
   }
}

$recorrer = verificarArray($noPelicula);
echo "<ul>";

if (is_array($recorrer)) {
    foreach ($recorrer as $valor) {
        echo "<li>";
            echo $valor;
        echo "</li>";
    }
}
else {
    var_dump($recorrer);
}

echo "</ul>";





?>