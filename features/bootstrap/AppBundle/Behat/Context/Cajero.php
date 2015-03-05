<?php

namespace AppBundle\Behat\Context;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Context\WebContext;

/**
 * Defines application features from the specific context.
 */
class Cajero extends WebContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }



    /**
     * @Given que el saldo de la cuenta es $ :arg1
     */
    public function queElSaldoDeLaCuentaEs($saldo)
    {

        /** @var \AppBundle\Model\Cuenta $cuentaMan */
        $cuentaMan = $this->getContainer()->get("cajero_manajer");
        $cuentaMan->iniciarSaldo($saldo);

    }

    /**
     * @Given la tarjeta es válida
     */
    public function laTarjetaEsValida()
    {
        //throw new PendingException();
    }


    /**
     * @When la solicitud del titular es retirar de su cuenta $ :arg1
     */
    public function laSolicitudDelTitularEsRetirarDeSuCuenta($importe)
    {
            echo "importe--->".$importe;
            $this->rellenoCampo("importe",$importe);
            $this->clickButton("Solicitar");
            $cuentaMan = $this->getContainer()->get("cajero_manajer");
            $cuentaMan->getMoney($importe);
            echo "----->" .$cuentaMan->getSaldo();
    }

    /**
     * @Then el cajero debe dar $ :arg1
     */
    public function elCajeroDebeDar($arg1)
    {
//        throw new PendingException();
    }

    /**
     * @Then el saldo de la cuenta debe ser $ :arg1
     */
    public function elSaldoDeLaCuentaDebeSer($saldo)
    {
        $this->iShouldSeeHeading("EL saldo es $saldo");
    }

    /**
     * @Then la tarjeta debe ser devuelta
     */
    public function laTarjetaDebeSerDevuelta()
    {
        throw new PendingException();
    }
}
