<?php
namespace Payment;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
// use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/payment',
                    'defaults' => [
                        'controller' => Controller\PaymentController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PaymentController::class => InvokableFactory::class, 
        ],
    ],
    'access_filter' => [
        'options' => [
            // The access filter can work in 'restrictive' (recommended) or 'permissive'
            // mode. In restrictive mode all controller actions must be explicitly listed 
            // under the 'access_filter' config key, and access is denied to any not listed 
            // action for not logged in users. In permissive mode, if an action is not listed 
            // under the 'access_filter' key, access to it is permitted to anyone (even for 
            // not logged in users. Restrictive mode is more secure and recommended to use.
            'mode' => 'restrictive'
        ],
        'controllers' => [
            Controller\PaymentController::class => [
                // Allow anyone to visit "index" and "about" actions
                ['actions' => ['index', 'about'], 'allow' => '*'],
                // Allow authorized users to visit "settings" action
                //['actions' => ['settings'], 'allow' => '@']
            ],
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
