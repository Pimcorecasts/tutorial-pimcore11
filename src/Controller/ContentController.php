<?php

namespace App\Controller;

class ContentController extends \Pimcore\Controller\FrontendController
{
    public function portalAction()
    {
        return $this->render('content/portal.html.twig');
    }
}
