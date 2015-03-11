<?php

namespace spec\AppBundle\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CuentaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('AppBundle\Model\Cuenta');
    }

    function it_la_cuenta_tiene_suficiente_fondo(){
        $this->iniciarSaldo(100);
        $this->getSaldo()->shouldBe(100);

        $this->getMoney(20)->shouldBe(80);
        //todo deveolver tarjeta
    }
    function it_la_cuenta_no_tiene_suficiente_fondo()
    {

        $this->iniciarSaldo(10);
        $this->getSaldo()->shouldBe(10);

        $this->shouldThrow(new \Exception('Saldo Insuficiente'))->duringGetMoney(20);

        $this->getSaldo()->shouldBe(10);

        //@todo deveolver tarjeta

    }


    function it_tarjet_ha_sido_deshabilitado(){
        $this->disabled();

        $this->shouldThrow(new \Exception("Tarjeta deshabilitada"))->duringGetMoney(20);
    }
}
