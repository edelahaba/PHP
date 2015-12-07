<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:29
 */
class Cliente
{
    private $nombre;
    private $numTarjeta;

    /**
     * Cliente constructor.
     * @param $nombre
     * @param $numTarjeta
     */
    public function __construct($nombre, $numTarjeta)
    {
        $this->nombre = $nombre;
        $this->numTarjeta = $numTarjeta;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getNumTarjeta()
    {
        return $this->numTarjeta;
    }

    /**
     * @param mixed $numTarjeta
     */
    public function setNumTarjeta($numTarjeta)
    {
        $this->numTarjeta = $numTarjeta;
    }

    /**
     * @return array
     */
    public function getCuentas()
    {
        return $this->cuentas;
    }

    /**
     * @param array $cuentas
     */
    public function setCuentas($cuentas)
    {
        $this->cuentas = $cuentas;
    }
    private $cuentas = Array();


}