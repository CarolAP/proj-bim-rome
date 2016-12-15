<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    // PARA REDIRECIONAR PARA OUTRA PÁGINA, USA O @ROUTE
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request) {
        // essa função vai renderizar a página inicial do projeto
        return $this->render('projeto/index.html.php', array());
    }

    /**
    * @Route("/carol", name="carol")
    */
    public function carolAction(Request $request) {
      // essa função vai renderizar outra página do projeto
      return $this->render('projeto/carol.html.php', array());
    }
}
