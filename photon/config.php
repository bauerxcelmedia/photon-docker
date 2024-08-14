<?php
add_filter('allowed_types', function($formats){
    // Add webp.
    $formats[] = 'webp';
    return $formats;
});

add_filter('url', function($url) {
    $domain = ''; // Replace with your domain with trailing slash.
    return str_replace('http://', $domain, $url);
});