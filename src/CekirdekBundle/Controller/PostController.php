<?php

namespace CekirdekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * Show post index
     * @Route("/")
     */
    public function indexAction(){
        $posts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findAll();

        return $this->render(
            "CekirdekBundle:Post:index.html.twig",array(
            'posts'=>$posts
        ));
    }

    /**
     * Show a post
     *
     * @param string $slug
     *
     * @return array
     *
     * @Route("/{slug}")
     */
    public function showAction($slug){

        $post=$this->getDoctrine()->getRepository('ModelBundle:Post')->findOneBy(array('slug'=>$slug));
        if(empty($post) || null === $post){
            throw $this->createNotFoundException("Not found");
        }

        return $this->render(
            "CekirdekBundle:Post:show.html.twig",array(
            'post'=>$post
        ));
    }


}
