<?php
session_start();
//Crea una session con clientes y si no existe te lo crea
if(!isset($_SESSION['clientes'])){
    $_SESSION['clientes'] = Array();
}
?>
<html>
<a href="crearClientes">Crear clientes</a>
<br>
<a href="visualizarClientes">Visualizar clientes</a>
<br>
<a href="crearCuentas">Crear cuentas</a>
<br>
<a href="visualizarCuentas">Crear cuentas</a>
</html>

