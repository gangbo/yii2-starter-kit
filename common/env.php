<?php
/**
 * Setup application environment
 */

$envs = parse_ini_file(dirname(__DIR__) . '/.env.ini', true, true);
foreach ($envs as $k => $v) {
    putenv("$k=$v");
}

defined('YII_DEBUG') or define('YII_DEBUG', (getenv('YII_DEBUG') === 'true' || getenv('YII_DEBUG') === '1'));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') ?: 'prod');
