<?php

$discountCodes = [];

$innerDiscount = [
    'type' => \ConferenceTools\Tickets\Domain\ValueObject\DiscountType\Fixed::class,
    'options' => ['gross' => 600],
    'name' => '1 Ticket for £90',
];

foreach (['ilt3php'] as $code) {

    $discountCodes[$code] = [
        'type' => \ConferenceTools\Tickets\Domain\ValueObject\DiscountType\RestrictedToTicketType::class,
        'options' => [
            'discountType' => \ConferenceTools\Tickets\Domain\ValueObject\DiscountType\FixedPerTicket::class,
            'options' => ['gross' => 600],
            'allowedTicketTypes' => [
                'early'
            ]
        ],
        'name' => '1 Ticket for £90',

    ];
}

return [
    'conferencetools' => [
        'tickets' => [
            'discountCodes' => $discountCodes
        ]
    ]
];