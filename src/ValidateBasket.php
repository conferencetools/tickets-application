<?php

namespace PHPYorkshire;

use ConferenceTools\Tickets\Domain\Service\Basket\BasketValidator;
use ConferenceTools\Tickets\Domain\ValueObject\Basket;

class ValidateBasket implements BasketValidator
{
    private static $workshopTypes = ['workshop', 'combo'];
    private static $workshopAM = ['wsam1', 'wsam2', 'wsam3', 'wsam4',];
    private static $workshopPM = ['wspm1', 'wspm2', 'wspm3', 'wspm4',];
    
    public function validate(Basket $basket): void
    {
        if (count($basket->getTickets()) === 0) {
            throw new \DomainException('You must choose at least 1 ticket to purchase');
        }

        $workshopTickets = $amTickets = $pmTickets = 0;

        foreach ($basket->getTickets() as $ticketReservation) {
            $identifier = $ticketReservation->getTicketType()->getIdentifier();

            if (in_array($identifier, self::$workshopTypes)) {
                $workshopTickets++;
            }

            if (in_array($identifier, self::$workshopAM)) {
                $amTickets++;
            }

            if (in_array($identifier, self::$workshopPM)) {
                $pmTickets++;
            }
        }

        if ($workshopTickets !== $amTickets || $workshopTickets !== $pmTickets) {
            throw new \DomainException('You must select 1 AM workshop and 1 PM workshop for each workshop ticket');
        }
    }
}
