<?php

use App\Classes\Rout;
use \App\Classes\Router;
use \App\Controllers\HomeController;
use Symfony\Component\HttpFoundation\Request;

function app() {
    return \Illuminate\Container\Container::getInstance();
}

$container = app();

$container->singleton('request', fn () => Request::createFromGlobals());
$container->alias('request', Request::class);

$container->singleton('router', Router::class);


$router = $container->get('router');
assert($router instanceof Router);

$router->get('/', HomeController::class);

$router->post('/current-search', HomeController::class.'@search');

$router->findRoute();

// var_dump(\App\Classes\Manager\XmlManager::loadingXmlThroughFile("https://cbr.ru/scripts/XML_daily.asp"));



/*$crb = new \App\Plugin\Swd\Rate\Classes\Api\Provider\CbrRuProvider();

$path = $crb->setDate("date_req1=02/03/2001&date_req2=14/03/2001")->setCurrency('VAL_NM_RQ=R01235')->get();

    var_dump($path);
// var_dump(\App\Modules\System\Classes\Manager\XmlManager::loadingXmlThroughFile($path));*/

?>