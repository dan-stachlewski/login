<?php

/*********************************************
 * CREATE A CONNECTION TO THE DATABASE
 *********************************************
 *
 * DATABASE NAME: world_pic
 * TABLE NAME: country
 * TABLE NAME: location
 * TABLE NAME: photographer
 * TABLE NAME: picture
 * TABLE NAME: public_comment
 * TABLE NAME: public_users
 * TABLE NAME: worldregion
 * USERNAME: root
 * PASSWORD: password
 *
 * CREATING CONNECTION VIA PDO
 *
 */

$config = array (
				'host'     => 'localhost',
				'dbname'   => 'world_pic',
				'user'     => 'root',
				'password' => 'password'
				);
/* CONNECT TO THE MySQL DATABASE USING:
 * PDO
 * TRY/CATCH EXCEPTION
 */


try {
	$db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']);
} catch(PDOException $e) {
	echo 'Cannot connect to database';
}



