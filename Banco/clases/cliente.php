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
    private $numTarjeta = 0;
    private $cuentas = Array();

    /**
     * Cliente constructor.
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this -> genNumTarjeta();
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
     * @return int
     */
    public function getNumTarjeta()
    {
        return $this->numTarjeta;
    }

    /**
     * @param int $numTarjeta
     */
    public function setNumTarjeta($numTarjeta)
    {
        $this->numTarjeta = $numTarjeta;
    }

    public function genNumTarjeta($numTarjeta)
    {
        $this->numTarjeta = sha1(date("njYHis"));
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

}