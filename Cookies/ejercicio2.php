

<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_REQUEST['enviar'])) {
    if ($_COOKIE[$_REQUEST['nombre']] == null) {
        $nombre = $_REQUEST['nombre'];
        setcookie($nombre, 1);
        echo "se ha etablecido la cookie de :" . $nombre;
    } 
    else{
        $valor = $_COOKIE[$_REQUEST['nombre']] + 1;
        setcookie($_REQUEST['nombre'],$valor);
        echo $_REQUEST['nombre'] . " ha hecho " . $_COOKIE[$_REQUEST['nombre']] . " visitas";
    }
}else{
   echo "<html>
    <head>
    </head>
    <body>
        <form action=\" " . $_SERVER['PHP_SELF'] . " \">
            <input type=\"text\" name=\"nombre\"/>
            <input type=\"submit\" name=\"enviar\"/>
        </form>
    </body>
</html>";
}
?>
