<?php

use App\Classes\Rout;
use \App\Classes\Router;
use \App\Controllers\HomeController;

// $router = Router::instance();


$rout = new Rout('get','/', HomeController::class );

$rout2 = new Rout('get','/test', HomeController::class.'@search' );

var_dump($rout->getController().'. method: '. $rout->getControllerMethod());
var_dump($rout2->getController(). $rout2->getControllerMethod());
//$router->add("/", HomeController::class);


 //$router->findRoute($_SERVER["REQUEST_URI"]);

// var_dump(\App\Classes\Manager\XmlManager::loadingXmlThroughFile("https://cbr.ru/scripts/XML_daily.asp"));



/*$crb = new \App\Plugin\Swd\Rate\Classes\Api\Provider\CbrRuProvider();

$path = $crb->setDate("date_req1=02/03/2001&date_req2=14/03/2001")->setCurrency('VAL_NM_RQ=R01235')->get();

    var_dump($path);
// var_dump(\App\Modules\System\Classes\Manager\XmlManager::loadingXmlThroughFile($path));*/

?>