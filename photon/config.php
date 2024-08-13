<?php
add_filter('allowed_types', function($formats){
    // Add webp.
    $formats[] = 'webp';
    return $formats;
});