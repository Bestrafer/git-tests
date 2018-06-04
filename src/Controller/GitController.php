<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GitController
 *
 * @Route(path="/git")
 *
 */
class GitController
{
    /**
     * @Route("/git")
     *
     * @Method("GET")
     *
     * @return Response
     */
    public function gitAction(): Response
    {
        $a = 5;
        $b = 6;
        $c = $a * $b;

        return new Response($c, Response::HTTP_NO_CONTENT);
    }
}
