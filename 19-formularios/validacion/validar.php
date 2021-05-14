
<?php

$error = "faltan_valores";

// comprobamos que los datos que vienen por POST no esten vacios
if (
    !empty($_POST['name'])
    && !empty($_POST['last_name'])
    && !empty($_POST['birth'])
    && !empty('email')
    && !empty($_POST['pass'])
    ){
        //asignamos los valores a unas variables 
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $birth = (INT)$_POST['birth'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    // validamos que nombre sea un string y que cumpla con las
    // expresiones regulares
    if(!is_string($name) || preg_match("#[0-9]#", $name)){


        $error = "nombre";
        header("Location:index.php?error=" . $error);
    }
    if (!is_string($last_name) || preg_match("#[0-9]#", $last_name)) {
        $error = "last_name";
        header("Location:index.php?error=" . $error);
    }

    if (!is_int($birth) || !filter_var($birth, FILTER_VALIDATE_INT)) {
        $error = "birth";
        header("Location:index.php?error=" . $error);
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
        header("Location:index.php?error=" . $error);
    }


}

else{
    $error = "empty";
    header("Location:index.php?error=" . $error);
}

?>