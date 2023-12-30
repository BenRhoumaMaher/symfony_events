<?php


use App\Events\ExmpEvent;
use App\Listeners\ExmpListener;
use Symfony\Component\EventDispatcher\EventDispatcher;

// initalise the event dispatcher
$dispatcher = new EventDispatcher();

// register listener for the "maher.event" event
$listener = new ExmpListener();
$dispatcher->addListener('maher.event', array($listener, 'onExmpEvent'));

// dispatch
$dispatcher->dispatch(new ExmpEvent(), ExmpEvent::NAME);