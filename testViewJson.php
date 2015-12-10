<?php

require "./vendor/autoload.php";

$vm = new \Zend\View\Model\ViewModel(array(
	'nom' => 'tintin',
	'title' => 'tintin',
	'description' =>'bande dessinée',
	'link' => 'http://manewa.fr')
);

$vm->setTemplate('testTintin');
$resolv = new \Zend\View\Resolver\TemplateMapResolver(array(
	'testTintin' => __DIR__ . '/tintin.phtml')
);

$rendu = new \Zend\View\Renderer\JsonRenderer();
$rendu->setResolver($resolv);
echo $rendu->render($vm);