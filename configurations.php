<?php

/**
 * Internal configurations
 */
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__ . DS);

define('PATH_PUBLIC', PATH_ROOT . 'public' . DS);
define('PATH_UPLOAD', PATH_PUBLIC . 'uploads' . DS);

define('PATH_RESOURCE', PATH_ROOT . 'resource' . DS);
define('PATH_CACHE', PATH_ROOT . 'cache' . DS);
define('PATH_ROUTE', PATH_ROOT . 'routes' . DS);

/**
 * Styles configurations
 */
define('SITE_TITLE', 'Mini Framework');
define('SITE_DESCRIPTION', 'Mini Framework');
define('SITE_URL', 'https://github.com/GuilhermeTome/php_front_base');
define('SITE_IMAGE', '');

define('FACEBOOK_ENABLED', false);
define('FACEBOOK_PUBLISHER', '');
define('FACEBOOK_AUTHOR', '');

define('TWITTER_ENABLED', false);
define('TWITTER_CREATOR', '');
define('TWITTER_SITE', '');
define('TWITTER_DOMAIN', '');
define('TWITTER_CARD', '');

define('OPEN_GRAPH_ENABLED', false);
define('OPEN_GRAPH_SITE_NAME', '');
define('OPEN_GRAPH_LOCALE', 'pt_BR');
define('OPEN_GRAPH_SCHEMA', 'article');

/**
 * Server configurations
 */
define('HTTP_PROTOCOL', 'http://');
