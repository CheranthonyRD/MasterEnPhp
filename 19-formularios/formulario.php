<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario PHP</title>
    </head>
    <body>


        <h1>Formulario PHP</h1>

            <?php

                if(isset($_GET['error']))
                {
                    $error = $_GET['error'];
                    if ($error == 'faltan_valores') {
                        echo '<strong style="color:red">' .   "llene los campos, no pueden
                                            estar vacios"
                                            . '</strong>';
                    }
                }

            ?>


        <form action="recibir.php" method="POST">
            <label for="title">Titulo</label><br>
            <input type="text" name="title" id="title"  autofocus>
            <br>
            <label for="des">
                Descripcion
            </label><br>
            <textarea name="des" id="des"
            cols="50" rows="10"
            ></textarea><br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>


