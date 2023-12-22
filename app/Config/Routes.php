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
$routes->get('MasterData/master_data', 'MasterData::master');
$routes->get('MasterData/inventory', 'MasterData::inventory');
$routes->get('MasterData/stok_opname', 'MasterData::stok_opname');
$routes->get('MasterData/barang_in', 'MasterData::barang_in');
$routes->get('MasterData/barang_out', 'MasterData::barang_out');
$routes->get('MasterData/order_in', 'MasterData::order_in');
