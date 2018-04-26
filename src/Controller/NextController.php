<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class NextController
 *
 * @Route(path="/next")
 *
 */
class NextController
{
    /**
     * @Route("/next")
     *
     * @Method("GET")
     *
     * @return Response
     *
     * @throws \InvalidArgumentException
     */
    public function indexAction(): Response
    {
        return new Response('', Response::HTTP_CREATED);
    }
}
