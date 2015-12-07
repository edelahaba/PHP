<?php
if (isset($_REQUEST['enviar'])) {
    $nombre = "color";
    $valor = $_REQUEST['color'];
    setcookie('color', $valor);
    header("location:ejercicio1.php");
}else{
    setcookie('color', 'white');
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
<?php
/*
  if ($_COOKIE[$nombre] != $_REQUEST['color'] && $_REQUEST['color'] != null) {
  //echo "<script>location.reload();</script>";
  //echo header("location:index.php");
  }
 */
?>
    </head>
    <body bgcolor="<?php echo $_COOKIE['color']; ?>">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="radio" name="color" value="red">Rojo<br>
            <input type="radio" name="color" value="green">Verde<br>
            <input type="radio" name="color" value="blue">Azul<br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </body>
</html>

