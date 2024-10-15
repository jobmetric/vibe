<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Time
    |--------------------------------------------------------------------------
    |
    | Cache time for get data vibe
    |
    | - set zero for remove cache
    | - set null for forever
    |
    | - unit: minutes
    */

    "cache_time" => env("VIBE_CACHE_TIME", 0),

    /*
    |--------------------------------------------------------------------------
    | Default Panel Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the panel name you want
    |
    */

    'panel_name' => env('VIBE_PANEL_NAME', 'Vibe'),

];
