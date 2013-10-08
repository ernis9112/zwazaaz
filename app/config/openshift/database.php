<?php

return array(
	'connections' => array(
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $_SERVER['OPENSHIFT_MYSQL_DB_HOST'],
			'port'      => $_SERVER['OPENSHIFT_MYSQL_DB_PORT'],
			'database'  => 'zwazaaz',
			'username'  => 'root',
			'password'  => '',
		),
	),
);
