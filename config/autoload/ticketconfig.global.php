<?php

return [
    'conferencetools' => [
        'tickets' => [
            'financial' => [
                'taxRate' => 20,
                'currency' => 'GBP',
                'displayTax' => true
            ],
            'discountCodes' => [
                'icheckedthesource' => [
                    'type' => \ConferenceTools\Tickets\Domain\ValueObject\DiscountType\Fixed::class,
                    'options' => ['gross' => 100],
                    'name' => 'I checked the source code',
                ]
            ],
            'tickets' => [
                'sup_early' => [
                    'name' => 'Super Early Bird',
                    'cost' => 6500,
                    'available' => 30,
                    'description' => 'Conference ticket for Saturday 14th April 2018'
                ],
                'early' => [
                    'name' => 'Early Bird',
                    'cost' => 8000,
                    'available' => 70,
                    'description' => 'Conference ticket for Saturday 14th April 2018',
                    'metadata' => [
                        'availableTo' => DateTime::createFromFormat('Y-m-d|', '2018-02-15')
                    ]
                ],
                'std' => [
                    'name' => 'Standard',
                    'cost' => 10000,
                    'available' => 45,
                    'description' => 'Conference ticket for Saturday 14th April 2018',
                    'metadata' => [
                        'availableFrom' => DateTime::createFromFormat('Y-m-d|', '2018-02-14'),
                        'availableTo' => DateTime::createFromFormat('Y-m-d H|', '2018-04-13 19'),
                        'after' => ['early']
                    ]
                ],
                'free' => ['name' => 'Free', 'cost' => 0, 'available' => 50, 'metadata' => ['private' => true]],
                'workshop' => [
                    'name' => 'Pre Conference Workshops',
                    'cost' => 15000,
                    'available' => 15,
                    'description' => 'Workshop ticket for Friday 13th April 2018. Please select your AM and PM workshop options below'
                ],
                'combo' => [
                    'name' => 'Conference and Workshop Combo',
                    'cost' => 22500,
                    'available' => 35,
                    'description' => 'Combo for Friday 13th and Saturday 14th April 2018. Please select your AM and PM workshop options below'
                ],
                'wsam1' => [
                    'name' => 'AM: Pragmatic TDD with Luka Muzinic',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wsam2' => [
                    'name' => 'AM: Pentesting Do’s and Dont’s with Clinton Ingrams',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wsam3' => [
                    'name' => 'AM: Technical Blogging for PHP Programmers with Thursday Bram',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wsam4' => [
                    'name' => 'AM: Using Laravel for rapid development with PHP Training',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wspm1' => [
                    'name' => 'PM: Best practices for crafting high quality PHP apps with James Titcumb',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wspm2' => [
                    'name' => 'PM: Developing your soft skills with Kenneth Schabrechts',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wspm3' => [
                    'name' => 'PM: Getting started with ReactPHP – Pushing real-time data to the browser with Christian Lück',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
                'wspm4' => [
                    'name' => 'PM: (Di|Con)vergent Mob Refactoring with Pim Elshoff',
                    'cost' => 0,
                    'available' => 20,
                    'description' => 'Abstract here?',
                    'supplementary' => true,
                ],
            ],
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => __DIR__ . '/../../view/layout.phtml',
            'tickets/layout' => __DIR__ . '/../../view/layout.phtml',
            'tickets/ticket/purchase' => __DIR__ . '/../../view/purchase.phtml',
        ]
    ],
    'command_handlers' => [
        'factories' => [
            \ConferenceTools\Tickets\Domain\CommandHandler\Ticket::class => \PHPYorkshire\TicketFactory::class,
        ],
    ],
];