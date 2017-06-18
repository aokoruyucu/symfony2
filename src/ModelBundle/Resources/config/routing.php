<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('model_homepage', new Route('/', array(
    '_controller' => 'ModelBundle:Default:index',
)));

return $collection;
