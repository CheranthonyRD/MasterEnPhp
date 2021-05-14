<?php 


// cookie basica
setcookie("MiCookie", "Valor de mi cookie");

// cookie con expiracion
setcookie("un_ano", "Esta cookie
        expira en un ano", time()+60*60*24*365);

// para acceder a las cookies se utiliza la superglobal 
// $_COOKIE[$nombre de la cookie]

echo $_COOKIE['MiCookie'];
?>