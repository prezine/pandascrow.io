<?php
	session_start();
	include_once './connect.php';
	include_once './database.php';
	$db = new Database($conn);
	if (REQUEST_METHOD == 'POST') {
		$data = array(
			'email' => $_POST['mail'], 
			'dateSubscribed' => GLOBAL_DATE, 
		);
		if ($db->insert('subscribers', $data) == 200) {
			echo 200;
		} else {
			echo $db->insert('subscribers', $data); // error output
		}
	}