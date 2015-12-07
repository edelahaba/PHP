<?php
spl_autoload_register(function ($clase) {
    include '../clases/' . $clase . '.php';
});
session_start();
$clientes = $_SESSION['clientes'];
if (!isset($_REQUEST['enviar'])) {
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>">
        Cliente
        <select name="cliente">
            <?php
            for ($i = 0; $i < count($clientes); $i++) {
                echo "<option value=\"$i\">NOMBRE: " . $clientes[$i]->getNombre() . " IDENTIFICADOR: " . $clientes[$i]->getNumTarjeta() . "</option>";
            }
            ?>
        </select><br><br>
        Tipo de cuenta:
        <select name="tipoCuenta">
            <option value="0">Cuenta corriente</option>
            <option value="1">Cuenta ahorro</option>
        </select><br><br>
        Saldo:
        <input type="number" name="saldo" required min="1"><br><br>
        <input type="submit" name="enviar">
    </form>
<?php } else {
    $pos = $_REQUEST['cliente'];
    $tipo = $_REQUEST['tipoCuenta'];
    $saldo = $_REQUEST['saldo'];
    $c;
    if (count($clientes [$pos]->getCuentas()) < 10) {
        if ($tipo == 0) {
            $c = new cuentaAhorro($saldo);
        } else {
            $c = new cuentaCorriente($saldo);
        }
        $clientes[$pos] -> addAccount($c);
        $_SESSION['clientes'] = $clientes;
    } else {
        echo "No puede crear mas de 10 cuentas.";
    }
} ?>
<br>
<a href="../index.php">Volver al inicio</a>
