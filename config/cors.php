<?php
return [
  'paths' => ['*'],
  'allowed_methods' => ['*'],
  'allowed_origins' => ['*'],
  'allowed_origins_patterns' => [],
  'allowed_headers' => ['Access-Control-Request-Method', 'Access-Control-Request-Headers', '*', 'Access-Control-Allow-Credentials'],
  'exposed_headers' => [],
  'max_age' => 0,
  'supports_credentials' => true,
];