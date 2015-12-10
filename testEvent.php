<?php
require "./vendor/autoload.php";

$myEventManager = new \Zend\EventManager\EventManager();

$listener = function($e){
	$params = $e->getParams();
	echo "Bonjour $params[0]\n";
};
$autre = function($e){
	echo "Ciao\n";
};

$myEventManager->attach('Lundi',$listener,1);
$myEventManager->attach('Lundi',$autre,2);

$myEventManager->trigger('Lundi',null,array(",nous sommes lundi"));
