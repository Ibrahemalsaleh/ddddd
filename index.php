<?php

require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . "/controllers/PageController.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/CountryController.php";
require_once __DIR__ . "/controllers/CategoryController.php";
require_once __DIR__ . "/controllers/CartController.php";

$router = new Router();


// $router->get('/', function(){
//    return view('home');
// }, 'home');

//users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');


$router->get('/users', 'UserController@index', 'user.list');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//products routes
$router->get('/products', 'ProductController@index', 'product.index');

$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');

$router->get('/products/{id}', 'ProductController@show', 'product.show');

$router->get('/', 'HomeController@index', 'home.index');

$router->get('/contact', 'PageController@contact', 'home.contact');
$router->post('/contact', 'PageController@submitContact', 'home.submitContact');


$router->get('/about', 'PageController@about', 'home.about');
// $router->get('/cart', 'PageController@cart', 'cart.show');
$router->get('/fav', 'PageController@fav', 'home.fav');
// $router->get("/country/{id}", ) ;
// Sign Up Page Routes
$router->get('/register', 'PageController@register', 'register.show');
$router->post('/register', 'AuthController@registration', 'registration.submit');

// Login Page Routes
$router->get('/login', 'AuthController@loginPage', 'login.show');
$router->post('/login', 'AuthController@login', 'login.submit');

// Route for listing all profile
$router->get('/countries', 'CountryController@index', 'countries.index');
$router->get('/profile', 'PageController@profile', 'profile.profile');
// $router->get('/category', 'PageController@category', 'category.show');


// Route for showing a specific country and its products
$router->get('/country/show/{id}', 'CountryController@show', 'country.show');

// Add these routes to your index.php file, alongside the existing routes

// Categories routes
$router->get('/categories', 'CategoryController@index', 'category.index');

$router->get('/categories/create', 'CategoryController@create', 'category.create');
$router->post('/categories/create', 'CategoryController@store', 'category.store');

$router->get('/categories/{id}/edit', 'CategoryController@edit', 'category.edit');
$router->put('/categories/{id}/edit', 'CategoryController@update', 'category.update');

$router->delete('/categories/{id}', 'CategoryController@destroy', 'category.destroy');

// Cart routes
$router->get('/cart', 'CartController@index', 'cart.index');
$router->post('/cart/add', 'CartController@add', 'cart.add');
$router->post('/cart/update', 'CartController@update', 'cart.update');
$router->post('/cart/remove', 'CartController@remove', 'cart.remove');
$router->post('/cart/clear', 'CartController@clear', 'cart.clear');

$router->dispatch();













//require_once __DIR__.'/config/routerold.php';
//if($uri == '/internet-plans'){
//    require_once __DIR__.'/controllers/products.controller.php';
//}
//if($uri == '/'){
//    require_once __DIR__.'/controllers/home.controller.php';
//}
//if($uri == '/devices-and-accessories'){
//    require_once __DIR__.'/controllers/devices.controller.php';
//}else{
//    require_once __DIR__.'/views/pages/404.view.php';
//}







