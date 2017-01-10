<?php

namespace Events\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Events\Service\EventService;

class EventsController extends AbstractActionController
{

    /**
     * Main service for handling events (IE conferences)
     *
     * @var \Events\Service\EventService
     */
    private $eventService;


    /**
     * Class constructor
     *
     * @param \Events\Service\EventService $eventService
     */
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    /**
     * Returns a list of events, as fethched from model
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
    	return new ViewModel([
    	    'events' => $this->eventService->getAllEvents()
         ]);
    }

    /**
     * Displays a specific event
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function eventAction()
    {
    	$id = $this->getRequest()->getQuery('id', null);

        if (null !== $id && !is_numeric($id)) {
            throw new \UnexpectedValueException('Invalid event ID. Numeric values only are accepted');
        }

    	return new ViewModel([
    	    'event' => $this->eventService->getEvent($id)
        ]);
    }

}
