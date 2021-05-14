<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
        Subir imagenes
        </h1>

        <form action="archivo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" style="display: block;">
        <input type="submit" value="Enviar">

        </form>

        <h2>Listado de imagenes</h2>

        <?php
            $gestor = opendir('./images');

            if($gestor)
            {
                while (false !== ($image = readdir($gestor)))
                {
                    if ($image != '.' && $image != '..') {


                       echo "<img src='images/$image'>";
                       echo "</img>";
                    }
                }
            }
        ?>
    </body>
</html>