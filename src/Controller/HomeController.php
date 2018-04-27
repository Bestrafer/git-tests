<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class HomeControllerssss
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
        return new Response('', Response::HTTP_OK);
    }
}
