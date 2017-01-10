<?php

namespace Events\Service;

use Events\Entity\Event;
use Doctrine\ORM\EntityManager;

/**
 * Handles interaction with events (IE conferences)
 *
 * @author Stefano Valle
 *
 */
class EventService {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $eventRepository;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $countryRepository;

	/**
	 * Constructs service
	 *
	 * @param \Doctrine\ORM\EntityManager Event Manager
	 */
	public function __construct(EntityManager $entityManager)
    {
		$this->entityManager = $entityManager;
        $this->eventRepository = $this->entityManager->getRepository('Events\Entity\Event');
        $this->countryRepository = $this->entityManager->getRepository('Events\Entity\Country');
	}

     /**
     * Gets a specific Event
     *
     * @param int Event Id
     * @return \Events\Entity\Event
     */
    public function getEvent($id)
    {
        $event = $this->eventRepository->find($id);

        if (null == $event) {
            throw new \DomainException('No event with such ID here.');
        }

        return $event;
    }

    /**
     * Gets Event List
     *
     * @return array List of Event
     */
    public function getAllEvents()
    {
        return $this->eventRepository->findAll();
    }

    /**
     * Fetches list of countries within the system
     */
    public function getCountries()
    {
    	return $this->countryRepository->findAll();
    }

}