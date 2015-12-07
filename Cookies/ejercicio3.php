<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_REQUEST['enviar'])) {
    if ($_COOKIE[$_REQUEST['nombre']] == null) {
        $nombre = $_REQUEST['nombre'];
        $pass = $_REQUEST['pass'];
        setcookie($nombre, $pass);
        echo "se ha etablecido la cookie de :" . $nombre . " con la pass: " . $pass;
        setcookie('ult_usr', $_REQUEST['nombre']);
    } 
    else{
       if($_REQUEST['pass'] != $_COOKIE[$_REQUEST['nombre']]){
          echo "contraseña incorrecta";
       } else {
           echo "Bienvenido " . $_REQUEST['nombre'];
       }

    }
}else { 
    $usuario = '';
    $pass = '';
    if(!empty($_COOKIE['ult_usr'])){
        $usuario = $_COOKIE['ult_usr'];
        $pass = $_COOKIE[$usuario];
    }
    ?> 
   <html>
    <head>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" >
            <input value="<?php echo $usuario ?>" type="text" name="nombre"/>
            <input value="<?php echo $pass ?>" type="password" name="pass"/>
            <input type="submit" name="enviar"/>
        </form>
    </body>
</html>
<?php } ?>
