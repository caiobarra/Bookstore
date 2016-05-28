<?php
    include('conexaodb.php');

    session_start();

    $usuario = $_REQUEST['user'];
    $senha = $_REQUEST['password'];
    
    $query="SELECT * FROM users
            WHERE  login='$usuario' AND password='$senha'";
    
    $recordset = mysql_query($query,$conn);
    
    if(mysql_num_rows($recordset)==1)
{   // SUCESSO!
	$_SESSION["logado"]="OK";
	header('Location: menu.php');
}
else
{   // FRACASSO!
	$_SESSION["logado"]="";	
	header('Location: errologin.html');
}
?>