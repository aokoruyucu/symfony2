<?php

namespace CekirdekBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    /**
     * @Route("/user/{slug}")
     * @param string $slug
     * @throws NotFoundHttpException
     */
    public function showAction($slug)
    {
        $user = $this->getDoctrine()
                ->getRepository('ModelBundle:User')->findOneBy(array('slug'=>$slug));
        if(null===$user){
            throw $this->createNotFoundException('Not found');
        }

        $posts = $this->getDoctrine()
            ->getRepository('ModelBundle:Post')->findBy(array('user'=>$user));
        return $this->render('CekirdekBundle:User:show.html.twig', array(
            'user' => $user,
            'posts' => $posts
        ));
    }

}
