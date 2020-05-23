<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("functions.php");
require_once("Site.php");
require_once("Site-cart.php");
require_once("Site-checkout.php");
require_once("Site-login.php");
require_once("Site-PagSeguro.php");
require_once("Site-profile.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");
require_once("admin-orders.php");

$app->run();

 ?>