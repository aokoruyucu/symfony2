<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('cekirdek_homepage', new Route('/', array(
    '_controller' => 'CekirdekBundle:Post:index',
)));
$collection->add('cekirdek_post_show', new Route('/{slug}', array(
    '_controller' => 'CekirdekBundle:Post:show',
)));

$collection->add('cekirdek_user_show', new Route('/user/{slug}', array(
    '_controller' => 'CekirdekBundle:User:show',
)));



return $collection;
