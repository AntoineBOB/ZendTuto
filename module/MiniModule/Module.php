<?php
namespace MiniModule;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\MvcEvent;
class Module implements ConfigProviderInterface, BootstrapListenerInterface, AutoloaderProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . "/config/module.config.php";
    }
    
    public function onBootstrap(EventInterface $e)
    {
        // Récupération des erreurs en ajoutant un callback qui affiche l'erreur coté serveur
        $application = $e->getTarget();
        $event = $application->getEventManager();
        $event->attach(MvcEvent::EVENT_DISPATCH_ERROR, function (MvcEvent $e) {
            error_log('DISPATCH_ERROR : ' . $e->getError());
            error_log($e->getControllerClass() . ' ' . $e->getController());
            //error_log("Exception :".$e->getParam("exception")->getMessage());
        });
        $event->attach(MvcEvent::EVENT_RENDER_ERROR, function (MvcEvent $e) {
            error_log('RENDER_ERROR : ' . $e->getError());
            error_log("Exception :".$e->getParam("exception")->getMessage());
        });
    }
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
