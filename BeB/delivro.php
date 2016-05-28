<?php
	include ('session.php');
?>
<html>
    <head>
        <link rel="shortcut icon" href="Imagens/logo.png">
        <title>B&B Bookstore</title>
		<link type="text/css" rel="stylesheet" href="style.css">
		<STYLE TYPE= "text/css"><!--
 A.meuslinks{
    color: white;
    text-decoration: underline;
  }
--></STYLE>
	</head>
    <body>
        <div class="bdmenu">
            <div class="cabeca">
            <img src="Imagens/logomaior.png" width="300" id="logos"></img>
    </div>
    <?php
	// trazer o valor do campo qualcarro
	$apagar = $_REQUEST['id'];

	include "conexaodb.php";
				
	//rodando uma query
	$query = "DELETE FROM produtos WHERE id=$apagar";
	echo '<div class="deleted">
   <h2>Produto deletado com sucesso. Clique <a class="meuslinks" href="selectlivro.php">aqui</a> para retornar.</h2></div>' ;
	mysql_query($query, $conn);
?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
B&B Bookstore - Todos os Direitos Reservados
</div>
        </div>
    </body>
</html>