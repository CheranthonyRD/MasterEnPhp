<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>
            Formulario
        </title>
    </head>
    <body>
        <style>
            body{
                margin: 50px;
                display: flexbox;
                text-align: center;
            }
            h1{
                font-family: 'Courier New', Courier, monospace;
                color: aquamarine;
            }
            input{
                margin-bottom: 10px;
                border-radius: 10px;
                padding: 5px;
            }
            label{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-style: oblique;
                color: darkgreen;
            }
            #btn-enviar
            {
                color: black;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                padding: 10px;
            }
            form{

                padding: 20px;
            }

        </style>

        <h1>Formulario para validar Seccion 21</h1>

        <?php



            if(isset($_GET['error']))
            {

                if($_GET['error'] == "nombre")
                {
                    echo "<h2>";

                    echo "Debe ingresar un nombre valido";

                    echo "</h2>";
                }

                if($_GET['error'] == "empty"){

                    echo "<h2 style='color:red;'>";

                    echo "campos vacios, favor rellenar";

                    echo "</h2>";
                }
                if ($_GET['error'] == "last_name") {
                    echo "<h2>";

                    echo "Debe ingresar un apellido valido";

                    echo "</h2>";
                }
                if ($_GET['error'] == "birth") {
                    echo "<h2>";

                    echo "Debe ingresar una edad valida";

                    echo "</h2>";
                }
                if ($_GET['error'] == "email") {
                    echo "<h2>";

                    echo "Debe ingresar un email valido";

                    echo "</h2>";
                }
            }

        ?>
        <form action="validar.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="name" id="nombre" autofocus>
            <br>

            <label for="apellido">Apellido</label>
            <input type="text" name="last_name" id="apellido">
            <br>

            <label for="edad">Edad</label>
            <input type="text" name="birth" id="edad">
            <br>

            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass">
            <br>
            <input id="btn-enviar" type="submit" value="ENVIAR">
        </form>
    </body>
</html>


