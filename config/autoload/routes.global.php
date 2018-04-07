<?php
return [
    'router' => [
        'routes' => [
            'tickets' => [
                'type' => \Zend\Mvc\Router\Http\Hostname::class,
                'options' => ['route' => 'tickets.phpyorkshire.co.uk']
            ],
            'checkin' => [
                'type' => \Zend\Mvc\Router\Http\Hostname::class,
                'options' => ['route' => 'checkin.phpyorkshire.co.uk']
            ],
        ]
    ]
];