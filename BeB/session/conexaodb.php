<?php
	$conn=mysql_connect("localhost","aluno","aluno")
	or die("Servidor fora do ar!");

	mysql_select_db("carros",$conn)
	or die("Sem acesso ao banco.");
?>