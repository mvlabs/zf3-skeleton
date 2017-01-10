<?php

namespace Events\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class EventsControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

	    // dependency is fetched from Service Manager
	    $eventService = $container->get('Events\Service\EventService');

	    // Controller is constructed, dependencies are injected (IoC in action)
	    return new EventsController($eventService);

	}

}