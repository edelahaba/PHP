<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:30
 */
class cuentaAhorro extends cuenta
{

    public function calcularInteres()
    {
        $interes = parent::getInteres() * 2;
        $interes = parent::getSaldo() * $interes;

        return $interes;
    }
}