<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Page/home', 'Page::home');
$routes->get('Page/scan_inbound', 'Page::scan_inbound');
$routes->get('/faqs', 'Page::faqs');
$routes->get('Page/detail_inbound/(:any)', 'Page::detail_inbound/$1');
$routes->get('Page/detail_put_away/(:any)', 'Page::detail_put_away/$1');
$routes->get('Page/put_away', 'Page::put_away');
