<?php

/**
 * Created by PhpStorm.
 * User: Nesto
 * Date: 07/12/2015
 * Time: 10:31
 */
class cuentaCorriente extends cuenta
{

    public function calcularInteres()
    {
        $interes = 0;
        if(parent::getSaldo() < parent::getBalanceMin()){
            $interes = parent::getInteres() / 2;
            $interes = parent::getSaldo() / $interes;
        }else{
            $interes = parent::getInteres() * 2;
            $interes = parent::getSaldo() * $interes;
        }
        return  $interes;
    }
}