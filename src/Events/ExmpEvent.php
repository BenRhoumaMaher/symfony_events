<?php

namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;

class ExmpEvent extends Event
{
    public const NAME = 'maher.event';
    protected $cst;

    public function __construct()
    {
        $this->cst = 'test';
    }


    /**
     * Get the value of cst
     */
    public function getCst()
    {
        return $this->cst;
    }
}