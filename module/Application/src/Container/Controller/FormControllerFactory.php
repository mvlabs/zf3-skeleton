<?php

declare(strict_types = 1);


namespace Application\Container\Controller;

use Application\Container\Form\FormFactory;
use Application\Controller\FormController;
use Interop\Container\ContainerInterface;

final class FormControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $form = $container->get(FormFactory::SERVICE_NAME);

        return new FormController($form);
    }
}
