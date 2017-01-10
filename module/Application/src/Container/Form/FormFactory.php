<?php

declare(strict_types = 1);


namespace Application\Container\Form;

use Interop\Container\ContainerInterface;
use Zend\Filter\StringToLower;
use Zend\Form\Element\Email;
use Zend\Form\Element\Textarea;
use Zend\Form\Factory;
use Zend\Validator\EmailAddress;

final class FormFactory
{
    const SERVICE_NAME = 'form';

    public function __invoke(ContainerInterface $container)
    {
        return (new Factory())->createForm([
            'elements' => [
                [
                    'spec' => [
                        'type' => Email::class,
                        'name' => 'email',
                        'options' => [
                            'label' => 'Your email address',
                        ]
                    ],
                ],
                [
                    'spec' => [
                        'type' => Textarea::class,
                        'name' => 'message',
                        'options' => [
                            'label' => 'Message',
                        ]
                    ],
                ],
                [
                    'spec' => [
                        'name' => 'send',
                        'type'  => 'Submit',
                        'attributes' => [
                            'value' => 'Submit',
                        ],
                    ],
                ],
            ],

            // Configuration to pass on to
            // Zend\InputFilter\Factory::createInputFilter()
            'input_filter' => [
                'email' => [
                    'filters' => [
                        [
                            'name' => StringToLower::class
                        ]
                    ],
                    'validators' => [
                        [
                            'name' => EmailAddress::class
                        ]
                    ],
                ],
            ],
        ]);
    }
}

