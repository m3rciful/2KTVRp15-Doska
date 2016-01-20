<?php
	// Вывод ошибок
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	session_start();
	include_once 'application/model/dbh.php';
	include_once 'application/model/EventsModel.php';
	include_once 'application/model/UsersModel.php';
	include_once 'application/controller/Render.php';
	include_once 'application/controller/EventsController.php';
	include_once 'application/controller/UsersController.php';
	include_once 'application/route/routing.php';
	
	echo $response;
?>
