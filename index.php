<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new leory96\DB\sql();
	
	$result = $sql ->select("SELECT * FROM met_plata");
	
	echo json_encode($result);

});

$app->run();

 ?>