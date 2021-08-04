<?php

return [

    "credentials" => [
        "client_id"     => env('EXPERIAN_CLIENT_ID'),
        "client_secret" => env('EXPERIAN_CLIENT_SECRET'),
        "username"      => env('EXPERIAN_USERNAME'),
        "password"      => env('EXPERIAN_PASSWORD'),
    ],
    "url"           => env("EXPERIAN_SERVICE_URL", "https://sandbox-uk-api.experian.com"),
];
