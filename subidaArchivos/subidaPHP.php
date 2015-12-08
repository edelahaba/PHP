<?php
if (isset($_REQUEST['enviar'])) {
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $nombre =   $_FILES['imagen']['name'];
        echo $nombre;
        $destino = "img/";
        $id = time();
        $nombreNuevo = $id . "imagen.jpg";
        move_uploaded_file($_FILES['imagen']['tmp_name'], $destino . $nombreNuevo);
        echo "subido";
        echo "<a href=\"" . $destino . utf8_encode($nombreNuevo). "\">imagen</a><br>";
    }
} else { ?>
<form action="subidaPHP.php" method="post" enctype="multipart/form-data">
        <input type="file" name="imagen">
        <input type="submit" name="enviar" value="Subir">
    </form>
<?php } ?>