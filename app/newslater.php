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
		$email = (isset($_POST['mail'])) ? $_POST['mail'] : 0 ;
		$is_exist = $db->select("SELECT COUNT(*) FROM subscribers WHERE email='$email'")['COUNT(*)'];
		if ($is_exist == 0) {
			if ($db->insert('subscribers', $data) == 200) {
				echo 200;
			} else {
				echo $db->insert('subscribers', $data); // error output
			}
		} else {
			echo 201;
		}
	}