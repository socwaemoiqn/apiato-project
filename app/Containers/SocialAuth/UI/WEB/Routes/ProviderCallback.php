<?php

// provider callback handler
$router->any('auth/google/callback', [
    'as' => 'web_socialauth_callback',
    'uses' => 'Controller@handleCallbackAll',
]);

