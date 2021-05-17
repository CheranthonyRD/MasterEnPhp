<?php

session_start();

$variable_normal = "Soy una variable que
                    solo vivo en este fichero";


$_SESSION['variable_persistente'] = "Soy una variable
que persiste con la session";




?>