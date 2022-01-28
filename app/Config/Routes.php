<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

$routes->get('/', 'Home::index');

//Propriete Routes
$routes->get('propriete', '\App\Modules\Propriete\Controllers\Propriete::index');
$routes->get('propriete/ajouter', '\App\Modules\Propriete\Controllers\Propriete::create');
$routes->post('propriete/enregistrer', '\App\Modules\Propriete\Controllers\Propriete::save');
$routes->get('propriete/editer/(:num)', '\App\Modules\Propriete\Controllers\Propriete::edit/$1');
$routes->post('propriete/modifier/(:num)', '\App\Modules\Propriete\Controllers\Propriete::update/$1');
$routes->get('propriete/supprimer/(:num)', '\App\Modules\Propriete\Controllers\Propriete::delete/$1');

//Cart Routes
$routes->get('shopping_cart/buy/(:num)', '\App\Modules\Cart\Controllers\Cart::buy/$1');
$routes->get('shopping_cart', '\App\Modules\Cart\Controllers\Cart::index');
$routes->get('shopping_cart/remove/(:num)', '\App\Modules\Cart\Controllers\Cart::remove/$1');
$routes->post('shopping_cart/update/', '\App\Modules\Cart\Controllers\Cart::update');
$routes->get('shopping_cart/checkout', '\App\Modules\Cart\Controllers\Cart::checkout');

//utilisateur Routes
$routes->get('utilisateur', '\App\Modules\Utilisateur\Controllers\Utilisateur::index');
$routes->get('utilisateur/signin', '\App\Modules\Utilisateur\Controllers\Utilisateur::login');
$routes->get('utilisateur/signup', '\App\Modules\Utilisateur\Controllers\Utilisateur::register');
$routes->post('utilisateur/save', '\App\Modules\Utilisateur\Controllers\Utilisateur::save');
$routes->post('utilisateur/check', '\App\Modules\Utilisateur\Controllers\Utilisateur::check');
$routes->get('utilisateur/home', '\App\Modules\Utilisateur\Controllers\Utilisateur::logged_in');
$routes->get('utilisateur/dashboard', '\App\Modules\Utilisateur\Controllers\Utilisateur::dashboard');
$routes->get('utilisateur/edit/(:num)', '\App\Modules\Utilisateur\Controllers\Utilisateur::update/$1');
$routes->get('utilisateur/update_password/(:num)', '\App\Modules\Utilisateur\Controllers\Utilisateur::pwd_update/$1');
$routes->post('utilisateur/update/(:num)', '\App\Modules\Utilisateur\Controllers\Utilisateur::edit/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
