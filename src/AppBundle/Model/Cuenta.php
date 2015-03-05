<?php

namespace AppBundle\Model;

use Symfony\Component\Config\Definition\Exception\Exception;

class Cuenta
{
    private $saldo = 0;
    private $activo = true;

    public function iniciarSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getMoney($importe)
    {

        try {
            if ($this->activo) {
                if ($this->saldo > $importe) {
                    $this->saldo -= $importe;
                    return $this->saldo;
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
