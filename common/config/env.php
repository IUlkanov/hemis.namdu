<?php
/**
 * Setup application environment
 */
$dotenv = new \Dotenv\Dotenv(dirname(dirname(__DIR__)));
$dotenv->load();


defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG') === 'true' || isset($_GET['dbg']));
defined('YII_ENV') or define('YII_ENV', getenv('YII_ENV') ?: 'prod');