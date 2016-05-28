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
           $titulo = $registro["titulo"];
	       $autor = $registro["autor"];
	       $editora = $registro["editora"];
	       $ano = $registro["ano"];
	       $genero = $registro["genero"];
	       $preco = $registro["preco"];
           $quantidade = $registro["quantidade"];
            $imagem = $registro["imagem"];
           $query = mysql_query("
           INSERT INTO produtos (album, banda, estilo, ano, preco, quantidade, imagem) 
           VALUES ('$_POST[titulo]' , '$_POST[autor]', '$_POST[editora]', '$_POST[ano]', '$_POST[genero]', '$_POST[preco]', '$_POST[quantidade]', , '$_POST[imagem]')")
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