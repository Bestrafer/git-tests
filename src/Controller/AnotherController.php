<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AnotherController
 *
 * @Route(path="/another")
 *
 */
class AnotherController
{
    /**
     * @Route("/another")
     *
     * @Method("GET")
     *
     * @return Response
     *
     * @throws \InvalidArgumentException
     */
    public function indexAction(): Response
    {
        $a = 5;
        $b = 6;

        $c = $a + $b;

        return new Response($c, Response::HTTP_NO_CONTENT);
    }
}
