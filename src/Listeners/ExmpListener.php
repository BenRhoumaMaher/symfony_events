<?php

namespace App\Listeners;

use Symfony\Contracts\EventDispatcher\Event;

class ExmpListener
{
    public function onExmpEvent(Event $event)
    {
        echo "ExmplListener is called!\n";
        echo "The value of the cst is : " . $event->getCst() . "\n";
    }
}