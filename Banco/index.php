<?php
session_start();
if(!isset($_SESSION['clientes'])){
    $_SESSION['clientes'] = Array();
}
?>