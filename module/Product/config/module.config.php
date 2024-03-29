<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Product\Controller\List' => 'Product\Controller\ListController'
        )
    ),
    // This lines opens the configuration for the RouteManager
    'router' => array(
        // Open configuration for all possible routes
        'routes' => array(
            // Define a new route called "post"
            'post' => array(
                // Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
                'type' => 'literal',
                // Configure the route itself
                'options' => array(
                    // Listen to "/product" as uri
                    'route'    => '/product',
                    // Define default controller and action to be called when this route is matched
                    'defaults' => array(
                        'controller' => 'Product\Controller\List',
                        'action'     => 'index',
                    )
                )
            )
        )
    )
);