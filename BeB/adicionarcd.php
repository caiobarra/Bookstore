<?php
	include ('session.php');
?>
<html>
    	<head>
        <link rel="shortcut icon" href="Imagens/logo.png">
        <title>B&B Bookstore - Livros</title>
		<link type="text/css" rel="stylesheet" href="style.css">
		<STYLE TYPE= "text/css"><!--
 A.meuslinks{
    color: white;
    text-decoration: underline;
  }
--></STYLE>
            </head>
    <body>
        <div class="bd">         
            <div class="cabeca">
            <a href='menu.html'><img src="Imagens/logomaior.png" width="300" id="logos"></img></a>
    </div>
        <?php
        include('conexaodb.php');
           $album = $registro["album"];
	       $banda = $registro["banda"];
	       $estilo = $registro["estilo"];
	       $ano = $registro["ano"];
	       $preco = $registro["preco"];
           $quantidade = $registro["quantidade"];
           $query = mysql_query("
           INSERT INTO cds (album, banda, estilo, ano, preco, quantidade) 
           VALUES ('$_POST[album]' , '$_POST[banda]', '$_POST[estilo]', '$_POST[ano]', '$_POST[preco]', '$_POST[quantidade]')")
            or die(mysql_error());
echo '<div class="deleted">
   <h2>Produto inserido com sucesso. Clique <a class="meuslinks" href="selectcd.php">aqui</a> para retornar.</h2></div>'
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
B&B Bookstore - Todos os Direitos Reservados
</div>
</div>
    </body>
</html>