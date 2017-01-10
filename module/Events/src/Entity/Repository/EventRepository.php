<?php

namespace Events\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class EventRepository extends EntityRepository {

    public function findEventsInVerona() {

        $s_query =  'SELECT e ' .
            'FROM \Events\Entity\Event e ' .
            'JOIN e.country c ' .
            'WHERE e.city = :city ' .
            'ORDER BY e.datefrom';


        $I_query = $this->getEntityManager()->createQuery($s_query);
        $I_query->setParameter('city', 'Verona');

        return $I_query->getResult();
    }

}
