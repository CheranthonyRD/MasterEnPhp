<?php

//funcion de mostrar arrays
function mostrandoArray($array_mostrar)
{
    if (is_array($array_mostrar)) {
        echo "<ul>";
        foreach ($array_mostrar as $numero) {
            echo "<li>" . $numero . "</li>";
        }
        echo "</ul>";
    }else {
        echo "Esto no es un array";
        var_dump($array_mostrar);
    }
}


// ordenar array
function ordenarArray($ordenar)
{

    sort($ordenar);

    return $ordenar;

}

// mostrar longitud de array

function mostraLongitudArray($a)
{
    $a = count($a);

    return $a;
}

// buscar elemento en un array

function buscarElemento($palabra, $elemento)
{
    $buscar = array_search($palabra, $elemento);

    return $buscar;
}

// comprobar si variable esta vacia

function VariableVacia($variable)
{
    if (empty($variable)) {
        $variable = "Este texto esta en minuscula, conviertelo a
        mayuscula";

        return $variable;
    }else {
        return $variable;
    }
}



?>