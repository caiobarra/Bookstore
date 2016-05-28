<?php
	session_start();
	if($_SESSION['logado']<>"OK")
	{
		header('Location: http://globo.com');
	}
?>

<html>
	<body>
		<h1>MENU</h1>
	</body>
</html>