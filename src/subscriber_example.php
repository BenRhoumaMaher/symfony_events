<?php

namespace App\symfonyEvent\src;

require_once './vendor/autoload.php';

use App\Events\ExmpEvent;
use App\Subscribers\TestSubscriber as TestSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher();

$subscriber = new TestSubscriber();
$dispatcher->addSubscriber($subscriber);

$dispatcher->dispatch(new ExmpEvent(), ExmpEvent::NAME);