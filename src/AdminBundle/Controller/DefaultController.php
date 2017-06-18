<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * Redirection
     * @return RedirectResponse
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('admin_post_index'));
    }
}
