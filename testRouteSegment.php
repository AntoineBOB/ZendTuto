<?php

require "./vendor/autoload.php";

$route = \Zend\Mvc\Router\Http\Segment::factory(
	array(
		'route' => '/:controller',
		'constraints' => array(
			'controller' => '[A-Za-z]+'
		)
	)
);

$req = new \Zend\Http\Request();
$req->setUri($argv[1]);

$match = $route->match($req);
if($match != null){
	echo "OK";
}
else{
	echo "NOn ok";
}
