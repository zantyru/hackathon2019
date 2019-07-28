<?php
	session_start();

	function getToken()
	{
		if(empty($_SESSION['token']))
		{
			$_SESSION['token'] = uniqid('', true);	
		}
		return password_hash($_SESSION['token'], PASSWORD_DEFAULT);
	}

	function checkToken($token)
	{
		return password_verify($_SESSION['token'], $token);
	}
?>