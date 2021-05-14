<?php 

 if(isset($_FILES['archivo'])){
  $archivo = $_FILES['archivo'];
  $tipo = $archivo['type'];
  var_dump($archivo);

    if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' ||
        $tipo == 'image/npg') {

        if (!is_dir('images')) {
                mkdir('images', 0777);
            }

            move_uploaded_file($archivo['tmp_name'], 'images/' . $archivo['name']);
            echo "<h2>" . "Imagen subida correctamente" . "</h2>";
            header("Refresh: 3; URL=index.php");
    }else{
        echo "Introduza una imagen de un tipo valido";
    }
 }





?>