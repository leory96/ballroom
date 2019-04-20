<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \leory96\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	/*$sql = new leory96\DB\sql();
	
	$result = $sql ->select("SELECT * FROM met_plata");
	
	echo json_encode($result);*/

	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>