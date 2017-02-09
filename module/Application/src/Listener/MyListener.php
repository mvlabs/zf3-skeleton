<?php

declare(strict_types = 1);

namespace Application\Listener;

use Application\Controller\IndexController;
use Zend\EventManager\EventInterface;
use Zend\EventManager\ListenerAggregateTrait;
use Zend\EventManager\SharedEventManagerInterface;

final class MyListener
{
    use ListenerAggregateTrait;

    public function attach(SharedEventManagerInterface $events, $prority = 1)
    {
        $this->listeners = $events->attach(
            IndexController::class,
            'operazione',
            [$this, 'dump']
        );
    }

    public function dump(EventInterface $event)
    {
        var_dump($event->getName(), $event->getParams());die;
    }
}
