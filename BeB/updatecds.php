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
include ('conexaodb.php');
$id = $_REQUEST["id"]; 
    $album = $_REQUEST["album"];
    $banda = $_REQUEST["banda"];
    $estilo = $_REQUEST["estilo"];
    $ano = $_REQUEST["ano"];
    $preco = $_REQUEST["preco"];
    $quantidade = $_REQUEST["quantidade"];

$query="UPDATE cds SET album='$album', banda='$banda', estilo='$estilo', ano='$ano', preco='$preco', quantidade='$quantidade'
    WHERE id='$id';
    recordset = mysql_query($query,$conn)";
echo '<div class="deleted">
   <h2>Produto editado com sucesso. Clique <a class="meuslinks" href="selectcd.php">aqui</a> para retornar.</h2></div>' ;
?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    </body>
</html>