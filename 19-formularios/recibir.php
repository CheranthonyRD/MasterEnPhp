<?php


$error = 'faltan_valores';

    if (!empty($_POST['title']) && !empty($_POST['des'])){
        $titulo = $_POST['title'];
        $des = $_POST['des'];
        $error = 'ok';
        echo "<h1>" . $titulo . "</h1>";
        echo "<br>";
        echo "<p width ='50%'>" . $des . "</p>";
    }
    else {

        header("Location:formulario.php?error=" . $error);
    }






?>



<a href="formulario.php">Volver el formulario </a>