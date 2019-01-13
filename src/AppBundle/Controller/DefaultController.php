<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('nosotros/nosotros.html.twig');
    }
    /**
     * @Route("/contacto/{sitio}", name="contacto")
     */
    public function contactosAction(Request $request, $sitio = "todos")
    {
        // replace this example code with whatever you need
        return $this->render('bares/bares.html.twig', array("sitio" => $sitio));
    }
}
