<?php

namespace Events;

use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'events' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/events',
                    'defaults' => [
                        'controller'    => Controller\EventsController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
            'event' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/event',
                    'defaults' => [
                        'controller'    => Controller\EventsController::class,
                        'action'        => 'event',
                    ],
                ]
            ],

        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\EventsController::class => Controller\EventsControllerFactory::class,
        ],
    ],

    'navigation' => [
        'default' => [
            'events' => [
                'label' => 'Events',
                'route' => 'events'
            ],
        ],
    ],

    'service_manager' => [
        'factories' => [
            Service\EventService::class => Service\EventServiceFactory::class,
        ],
    ],

    'view_helpers' => [
        'invokables' => [
            'cost' => View\Helper\DisplayCost::class,
        ],
    ],

    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src//Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

    'bjyauthorize' => [
        'guards' => [
            'BjyAuthorize\Guard\Controller' => [
                ['controller' => Controller\EventsController::class, 'roles' => []],
            ]
        ]
    ]

];
