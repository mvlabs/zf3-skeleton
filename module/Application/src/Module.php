<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Application\Controller\IndexController;
use Application\Listener\MyListener;
use Zend\EventManager\EventInterface;
use Zend\Mvc\MvcEvent;

class Module
{
    const VERSION = '3.0.2dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();
        $eventManager = $event->getApplication()->getEventManager()->getSharedManager();

        $listener = $serviceManager->get(MyListener::class);
        $listener->attach($eventManager);

        // IF WE NEED TO ATTACH TO A MVC EVENT, WE DON'T NEED THE SHARED EVENT MANAGER
        /*
        $eventManage = $event->getApplication()->getEventManager();
        $eventManager->attach(MvcEvent::EVENT_DISPATCH, function(EventInterface $event) {
            var_dump($event->getName(), $event->getParams());die;
        });
        */
    }
}
