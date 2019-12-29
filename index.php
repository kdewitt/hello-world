<?php

/**
 * Description
 *
 * @package     ComposerTuts
 * @since       1.0.0
 * @author      machouinard
 */
require_once __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger( 'name' );
$log->pushHandler(
	new Monolog\Handler\StreamHandler(
		'app.log',
		Monolog\Logger::WARNING
	)
);
$log->warning( 'Foo' );
