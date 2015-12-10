<?php
namespace upjv\LicPro;
require "./vendor/autoload.php";

class LicencePro{
	static $compteur = 0;
	//$toto;

	function __construct(){
		self::$compteur++; //Accès aux variable static par self
		//$this->toto; //Accès aux variable de classes par $this
		//echo "Création de la classe";
	}

	function __destruct(){
		//Appeller le destructeur : unset($obj)
		self::$compteur--;
	}
	static function getNB(){
		return self::$compteur;
	}
}

$sm = new \Zend\ServiceManager\ServiceManager();
//$sm->setInvokableClass('upjv\LicPro\LicencePro','upjv\LicPro\LicencePro');
//$sm->setShared('promo',false);

$smc = new \Zend\ServiceManager\Config(include 'conf.php');
$smc->configureServiceManager($sm);

$obj= $sm->get('upjv\LicPro\LicencePro'); //Récupère la classe Licence pro, instanciée
echo LicencePro::getNB()."\n";
$obj = $sm->get('upjv\LicPro\LicencePro');
echo LicencePro::getNB()."\n";