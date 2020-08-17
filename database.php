<?php

$config = require_once 'config.php';

try { 

	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	]);
		
} catch (PDOException $error) {
	// łapiemy wyjątek PDOException o nazwie $error
		//echo $error->getMessage();
		exit('Database error');
}
// można zrezygnować z tagu zamykającego  bo w tym pliku będzie tylko kod php


