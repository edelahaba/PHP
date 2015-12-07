<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:30
 */
abstract class cuenta {

    private $numCuenta;
    private $saldo;
    private $interes = 1;
    private $balanceMin = 300;

    /**
     * @return int
     */
    public function getBalanceMin()
    {
        return $this->balanceMin;
    }

    /**
     * @return int
     */
    public function getInteres()
    {
        return $this->interes;
    }


    /**
     * @return mixed
     */
    public function getNumCuenta()
    {
        return $this->numCuenta;
    }

    /**
     * @param mixed $numCuenta
     */
    public function setNumCuenta($numCuenta)
    {
        $this->numCuenta = $numCuenta;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed Calcula el interes dependiendo del tipo de cuenta que pertenezca.
     */
    public abstract function calcularInteres();

}