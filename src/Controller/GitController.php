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
        return new Response('git', Response::HTTP_NO_CONTENT);
    }
}
