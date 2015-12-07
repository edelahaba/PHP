<?php
session_start();
//Crea una session con clientes y si no existe te lo crea
if(!isset($_SESSION['clientes'])){
    $_SESSION['clientes'] = Array();
}
?>
<html>
<a href="gestion/crearClientes.php">Crear clientes</a>
<br>
<a href="gestion/visualizarClientes.php">Visualizar clientes</a>
<br>
<a href="gestion/crearCuentas.php">Crear cuentas</a>
<br>
<a href="gestion/visualizarCuentas.php">Visualizar cuentas</a>
</html>

