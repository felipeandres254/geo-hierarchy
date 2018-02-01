<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | Here we define the database connection to download the information from
    | the Open Street Map API.
    |
    */
    'connections' => [

        'geo-hierarchy'  => [
            'driver'    => 'mysql',
            'host'      => 'DB_HOST',
            'port'      => 'DB_PORT',
            'database'  => 'DB_DATABASE',
            'username'  => 'DB_USERNAME',
            'password'  => 'DB_PASSWORD',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],

    ],

];
