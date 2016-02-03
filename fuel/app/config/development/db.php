<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=' . $_ENV['MYSQL_PORT_3306_TCP_ADDR'] .';dbname=combi_dev',
			'username'   => 'root',
			'password'   => $_ENV['MYSQL_ENV_MYSQL_ROOT_PASSWORD'],
		),
	),
);
