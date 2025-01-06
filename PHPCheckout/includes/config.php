<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null 
 */
function config($key = '')
{
    $config = [
        'name' => 'IoniaPay Processor Demo',
        'site_url' => '',
        'pretty_uri' => false,
     
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v0.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
