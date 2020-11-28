<?php
	session_start();
	include_once './connect.php';
	include_once './database.php';
	$db = new Database($conn);
	if (REQUEST_METHOD == 'POST') {
		$data = array(
			'name' => $_POST['contactname'], 
			'email' => $_POST['contactemail'],
			'note' => $_POST['contactmessage'], 
			'dateSent' => GLOBAL_DATE
		);
		if ($db->insert('contact', $data) == 200) {
			echo 200;
		} else {
			echo $db->insert('contact', $data); // error output
		}
	}