<?php

	$username = "cococo";
	$password = "123456";


	if (isset($_POST['username'])) {
		$username = $_POST['username'];
	}

	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}


	$username_server = "coco";
	$password_server = "1234";

	if ($username == $username_server && $password == $password_server) {
		$response['success'] = true;
		$response['message'] = 'Connexion réussie';
	} else {
		$response['success'] = false;
		$response['message'] = 'Login ou mot de passe incorrect';
	}

	echo json_encode($response);
?>