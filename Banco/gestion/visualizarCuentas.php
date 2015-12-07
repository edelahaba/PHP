<?php
spl_autoload_register(function ($clase) {
    include '../clases/' . $clase . '.php';
});
session_start();
$clientes = $_SESSION['clientes'];
if (isset($_SESSION['clientes'])) {
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>">
        Cliente
        <select name="cliente">
            <?php
            for ($i = 0; $i < count($clientes); $i++) {
                echo "<option value=\"$i\">NOMBRE: " . $clientes[$i]->getNombre() . " IDENTIFICADOR: " . $clientes[$i]->getNumTarjeta() . "</option>";
            }
            ?>
        </select>
        <input type="submit" name="enviar">
    </form>
<?php }
    if(isset($_REQUEST['enviar'])){
    $pos = $_REQUEST['cliente'];
    $cuentas = $clientes[$pos] -> getCuentas();
    echo"<table border='1'>";
    echo "<tr><td>Numero de cuenta</td><td>Saldo</td><td>Tipo de cuenta</td></tr>";
    for($i = 0; $i < count($cuentas) ; $i++){
       echo "<tr><td>" . $cuentas[$i] -> getNumCuenta() . "</td><td>" . $cuentas[$i] -> getSaldo() . "</td><td>" .   get_class($cuentas[$i]) . "</td></tr>";
    }
    echo"</table>";}
?>
<br>
<a href="../index.php">Volver al inicio</a>
