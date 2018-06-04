<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeController
 *
 * @Route(path="/")
 *
 */
class HomeController
{
    /**
     * @Route("")
     *
     * @Method("GET")
     *
     * @return Response
     *
     * @throws \InvalidArgumentException
     */
    public function indexAction(): Response
    {
        // wind of change
        //stupid change 
        return new Response('', Response::HTTP_OK);
    }
}
