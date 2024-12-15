<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'], // Solo rutas API

    'allowed_methods' => ['*'], // Permite todos los métodos (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['*'], // Permite solicitudes desde cualquier origen

    'allowed_origins_patterns' => [], // Opcional: usa patrones si necesitas restricciones específicas

    'allowed_headers' => ['*'], // Permite todos los encabezados (necesario para JWT)

    'exposed_headers' => [], // Encabezados visibles en las respuestas

    'max_age' => 0, // Tiempo máximo para solicitudes preflight

    'supports_credentials' => false, // Establece en false para JWT
];
