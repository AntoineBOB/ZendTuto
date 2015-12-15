<?php
namespace MiniModule\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;
/**
 * Class IndexController
 *
 * @package MiniModule
 */
class IndexController extends AbstractActionController
{
    public function onDispatch(MvcEvent $e)
    {
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');
        $layout = $this->layout();
        $formViewManager = new ViewModel( array( 'form' => $form ) );
        $formViewManager->setTemplate( 'layout/form-auth');
        $layout->addChild( $formViewManager, 'formulaireAuth');
        parent::onDispatch($e);
    }
    public function indexAction()
    {
        return array();
    }
    public function formAction()
    {
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');
        if ( $this->getRequest()->isPost() ) {
            $form->setData( $this->getRequest()->getPost());
            if ($form->isValid()) {
                $vm = new ViewModel();
                $vm->setVariables( $form->getData() );
                $vm->setTemplate('mini-module/index/traite');
                return $vm;
            }
        }
        return array( ); // ici le viewManager est celui par défaut il est initialisé avec les valeurs retournées
    }
}