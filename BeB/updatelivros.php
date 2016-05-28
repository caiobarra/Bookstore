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

$id=$_REQUEST['id'];
$imagem=$_REQUEST['imagem'];
$titulo = $_REQUEST['titulo'];
$autor = $_REQUEST['autor'];
$editora = $_REQUEST['editora'];
$ano = $_REQUEST['ano'];
$genero = $_REQUEST['genero'];
$preco = $_REQUEST['preco'];
$quantidade = $_REQUEST['quantidade'];

$query="UPDATE produtos SET imagem= '$imagem', titulo='$titulo', autor='$autor', editora='$editora', ano='$ano', genero='$genero', preco='$preco', quantidade='$quantidade'
		WHERE id=$id";
$recordset = mysql_query($query,$conn);	

echo '<div class="deleted">
   <h2>Produto editado com sucesso. Clique <a class="meuslinks" href="selectlivro.php">aqui</a> para retornar.</h2></div>'
?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    </body>
</html>