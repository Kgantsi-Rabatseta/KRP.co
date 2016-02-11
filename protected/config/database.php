<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost:3309;dbname=krp_db',
	'emulatePrepare' => true,

	'username' => 'xampp_',
	'password' => 'password1',
	'charset' => 'utf8',

);