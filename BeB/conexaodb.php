<?php
	$conn=mysql_connect("localhost","root","")
	or die("Servidor fora do ar!");

	mysql_select_db("bookstore",$conn)
	or die("Sem acesso ao banco.");

?>