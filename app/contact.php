<?php
	session_start();
	include_once './connect.php';
	include_once './database.php';
	$db = new Database($conn);
	if (REQUEST_METHOD == 'POST') {
		echo $_POST;
	}