<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /** @var \AppBundle\Model\Cuenta $cajeroMan */
        $cajeroMan = $this->container->get("cajero_manajer");

        $this->get("logger")->info("Saldo----> ".$cajeroMan->getSaldo());

        if( $request->isMethod('post')){
            $this->get("logger")->info("importe");
            $importe = $request->get("importe");
            $this->get("logger")->info($importe);
            $cajeroMan->getMoney($importe);
            $this->get("logger")->info($cajeroMan->getSaldo());
        }


        return $this->render('default/index.html.twig',array(
                "saldo" => $cajeroMan->getSaldo()
            )

        );
    }
}
