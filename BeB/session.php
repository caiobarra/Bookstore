<?php
session_start();
	if($_SESSION['logado']<>"OK")
	{
		header('Location: login.html');
	}

?>