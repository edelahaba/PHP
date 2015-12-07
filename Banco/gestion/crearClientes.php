<?php
session_start();

spl_autoload_register(function ($clase) {
    include '../clases/' . $clase . '.php';
});

//Crea una session con clientes y si no existe te lo crea
if (isset($_REQUEST['enviar'])) {
    $clientes = $_SESSION['clientes'];
    $nombre = $_REQUEST['nombre'];
    $c = new cliente($nombre);
    array_unshift($clientes,$c);
    $_SESSION['clientes'] = $clientes;
    header("refresh:5;url=../index.php");
    echo "Creado el cliente: " . $c->getNombre() . " con el numero de cuenta " . $c->getNumTarjeta();
    echo "<br>Redireccion en 5 segundos...";
} else {
    ?>
    <html>
    <head>
        <title>Crear Cuentas</title>
    </head>
    <form action
    "<?php echo $_SERVER['PHP_SELF']; ?>">
    Nombre <input type="text" name="nombre" required required pattern="[A-z]*"><br><br>
    <input type="submit" name="enviar" value="Crear">
    </form>
    </html>
<?php } ?>