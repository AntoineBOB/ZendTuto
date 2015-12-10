<?php
namespace MiniModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;
/**
 * Class IndexController
 *
 * @package MiniModule
 */
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return array('nom'=>'tintin');
    }
    
    public function formAction(){
        $services = $this->getServiceLocator();      
        $form = $services->get('MiniModule\Form\Authentification');
        return array( 'form' => $form );
    }
}