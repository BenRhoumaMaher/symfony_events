<?php

namespace App\Subscribers;

use App\Events\ExmpEvent;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;

class TestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            ExmpEvent::NAME => 'onExmpEvent',
        );
    }

    public function onExmpEvent(ExmpEvent $event)
    {
        // fetch event information here
        echo "DemoListener is called!\n";
        echo "The value of the cst is :" . $event->getCst() . "\n";
    }
}