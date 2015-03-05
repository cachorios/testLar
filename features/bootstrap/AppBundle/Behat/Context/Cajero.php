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
    public function queElSaldoDeLaCuentaEs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given la tarjeta es válida
     */
    public function laTarjetaEsValida()
    {
        throw new PendingException();
    }

    /**
     * @Given la maquina tiene suficiente dinero
     */
    public function laMaquinaTieneSuficienteDinero()
    {
        throw new PendingException();
    }

    /**
     * @When la solicitud del titular es retirar de su cuenta $ :arg1
     */
    public function laSolicitudDelTitularEsRetirarDeSuCuenta($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then el cajero debe dar $ :arg1
     */
    public function elCajeroDebeDar($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then el saldo de la cuenta debe ser $ :arg1
     */
    public function elSaldoDeLaCuentaDebeSer($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then la tarjeta debe ser devuelta
     */
    public function laTarjetaDebeSerDevuelta()
    {
        throw new PendingException();
    }
}
