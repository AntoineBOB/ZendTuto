<?php

require './vendor/autoload.php';

$vm = new \Zend\View\Model\ViewModel(array('nom'=>'tintin'));
$vm->setTemplate('testTintin');

$v = new \Zend\View\View();
$v->addRenderingStrategy(function(){
	$resol = new \Zend\View\Resolver\TemplateMapResolver(array(
		'testTintin' => __DIR__ . '/tintin.phtml'
		)
	);
	$rendu = new \Zend\View\Renderer\PhpRenderer();
	$rendu->setResolver($resol);
	return $rendu;
});

$v->addResponseStrategy(function($p){
	$params = $p->getParams();
	$response = $params['response'];
	$rendu = $params['result'];
	$response->setContent($rendu);
});
$r = new \Zend\Console\Response();
$v->setResponse($r);

try{
	$v->render($vm);
}
catch(Exception $e){
	echo $e->getMessage()."\n";
}
echo $v->getResponse()->getContent();


