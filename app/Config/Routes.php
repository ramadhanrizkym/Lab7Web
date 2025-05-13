<?php

use CodeIgniter\Router\RouteCollection;
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('Index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(); 
$routes->setAutoRoute(true); 


$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact'); 
$routes->get('/faqs', 'Page::faqs');
