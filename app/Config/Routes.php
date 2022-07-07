<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/valid_register', 'Register::valid_register');
$routes->post('/login/valid_login', 'Login::valid_login');
$routes->get('/login', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/pendonor/form', 'Pendonor::form');
$routes->get('/pendonor/list', 'Pendonor::index');
$routes->post('/pendonor/save', 'Pendonor::save');
$routes->get('/urgent/form', 'Urgent::form');
$routes->get('/urgent/list', 'Urgent::index');
$routes->post('/urgent/save', 'Urgent::save');
$routes->get('/post', 'Post::index');
$routes->post('/urgent/search', 'Urgent::search');
$routes->get('/post/urgent/delete/(:num)', 'Post::delete_urgent/$1');
$routes->get('/post/pendonor/delete/(:num)', 'Post::delete_pendonor/$1');
$routes->get('/post/edit/(:alpha)/(:num)', 'Post::view_edit/$1/$2');
$routes->post('/post/update/(:alpha)/(:num)', 'Post::update/$1/$2');
$routes->post('/post/search', 'Post::search');
$routes->post('/pendonor/search', 'Pendonor::search');







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
