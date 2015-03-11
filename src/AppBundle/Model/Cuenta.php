<?php

namespace AppBundle\Model;

use Symfony\Component\Config\Definition\Exception\Exception;

class Cuenta
{
    public static $saldo = 100;
    private $activo = true;

    public function iniciarSaldo($saldo)
    {
        Cuenta::$saldo = $saldo;
    }

    public function getSaldo()
    {
        return Cuenta::$saldo;
    }

    public function getMoney($importe)
    {

        try {
            if ($this->activo) {
                if (Cuenta::$saldo > $importe) {
                    Cuenta::$saldo -= $importe;
                    return Cuenta::$saldo;
                } else {
                    throw new \Exception("Saldo Insuficiente");
                }
            } else {
                throw new \Exception("Tarjeta deshabilitada");
            }
        }catch (\Exception $e){
            throw $e;
        }


    }

    public function disabled()
    {
        $this->activo = false;

    }
}
