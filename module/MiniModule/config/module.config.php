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
            'mini-module/index/form' => __DIR__. '/../view/minimodule/index/form.phtml'
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'MiniModule\Controller\Index' => 'MiniModule\Controller\IndexController',
        )
    )
);