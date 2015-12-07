<?php
spl_autoload_register(function ($clase) {
    include '../clases/' . $clase . '.php';
});

session_start();

//Crea una session con clientes y si no existe te lo crea
if (isset($_SESSION['clientes'])) {
    $clientes = $_SESSION['clientes'];
    // echo var_dump($clientes);
    echo "<table border='1'>";
    echo "<tr><td>Nombre cliente</td><td>Id de cliente</td></tr>";
    for ($i = 0; $i < count($clientes); $i++) {
        echo "<tr><td>" . $clientes[$i]-> getNombre() . "</td><td>" . $clientes[$i]-> getNumTarjeta() . "</td>";
    }
    echo "</table>";
} else {
    echo "No hay clientes registrados";
    header("refresh:2;url=../index.php");
}
?>
<br>
<a href="../index.php">Volver al inicio</a>
