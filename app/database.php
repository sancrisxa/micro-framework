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
        'database' => 'curso_microframework',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8',
        'collation' => 'ut8_unicode_ci'
     ]

];