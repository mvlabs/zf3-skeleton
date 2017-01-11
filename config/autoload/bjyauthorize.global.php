<?php

return [
    'bjyauthorize' => [

        // set the 'guest' role as default (must be defined in a role provider)
        'default_role' => 'guest',

        /* this module uses a meta-role that inherits from any roles that should
         * be applied to the active user. the identity provider tells us which
         * roles the "identity role" should inherit from.
         * for ZfcUser, this will be your default identity provider
        */
        'identity_provider' => \BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider::class,

        /* role providers simply provide a list of roles that should be inserted
         * into the Zend\Acl instance. the module comes with two providers, one
         * to specify roles in a config file and one to load roles using a
         * Zend\Db adapter.
         */
        'role_providers' => [

            /* here, 'guest' and 'user are defined as top-level roles, with
             * 'admin' inheriting from user
             */
            \BjyAuthorize\Provider\Role\Config::class => [
                'admin' => [],
                'guest' => [],
            ],

        ],

    ],
];
