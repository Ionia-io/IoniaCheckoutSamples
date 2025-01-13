<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Ionia Pay Demo Site',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            'home' => 'Home',
            'continuous-post-method' => 'Continuous Post Method',
            'continuous-querrystring-method' => 'Continuous Querrystring Method',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
