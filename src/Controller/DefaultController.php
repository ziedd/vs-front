<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("")
     */
    public function indexAction()
    {
        return new Response(
            '<html><body>Welcome to pic-front-outremer</body></html>'
        );
    }
}
