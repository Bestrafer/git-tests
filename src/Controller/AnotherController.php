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
        $country1 = 'Rosja';
        $country2 = 'Polska';
        
        return new Response('', Response::HTTP_NO_CONTENT);
    }
}
