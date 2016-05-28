<?php
// dá um start na SESSION

session_start();

// cria a variável "logado" e deu um valor a ela
$_SESSION["logado"]="OK";

// link
print "<a href='mostrasession.php'>AQUI</a>";
?>