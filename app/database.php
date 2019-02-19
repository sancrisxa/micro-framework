<?php

return [

    /**
     * Options (mysql, sqlite)
     */

     'driver' => 'sqlite',

     'sqlite' => [

        'host' => 'database.db'
     ],

     'mysql' => [

        'host' => 'localhost',
        'database' => 'micro_framework',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8',
        'collation' => 'ut8_unicode_ci'
     ]

];