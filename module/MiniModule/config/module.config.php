<?php
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'index'
                    )
                )
            ),
            'form' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/form',
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'form'
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'template_map' => array(
            'error' => __DIR__ . '/../view/error.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'mini-module/index/index' => __DIR__ . '/../view/minimodule/index/index.phtml',
            'mini-module/index/form' => __DIR__. '/../view/minimodule/index/form.phtml',
            'mini-module/index/traite' => __DIR__. '/../view/minimodule/index/traite.phtml',
            'layout/form-auth' => __DIR__ . '/../view/layout/formAuth.phtml',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'MiniModule\Controller\Index' => 'MiniModule\Controller\IndexController',
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'MiniModule\Form\Authentification' => 'MiniModule\Form\AuthentificationFormFactory',
        ),
        'services' => array (
            'config_authentification_form' => include __DIR__.'/config_authentification_form.php',
        ),
    ),
);