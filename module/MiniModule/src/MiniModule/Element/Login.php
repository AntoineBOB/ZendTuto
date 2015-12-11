<?php
namespace MiniModule\Element;
use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;
class Login extends Element\Text implements InputProviderInterface
{
    public function __construct()
    {
        $options = array(
            'label' => 'Login : ',
        );
        parent::__construct('log', $options);
        $this->setAttribute( 'size', 12 );
    }
    public function getInputSpecification()
    {
        return array(
            'required' => true,
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\Alpha',
                ),
            ),
            'filters' => array(
                array(
                    'name' => 'Zend\I18n\Filter\Alpha'
                ),
            ),
        );
    }
}