<html>
	<head>
        <link rel="shortcut icon" href="Imagens/logo.png">
        <title>B&B Bookstore</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<STYLE TYPE= "text/css"><!--
 A.meuslinks{
    color: black;
    text-decoration: none
  }
    A.meuslinksa{
    color: white;
    text-decoration: none
  }
--></STYLE>
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="scripts.js"></script>
		<link type="text/css" rel="stylesheet" href="style.css">
		<meta charset="latin1">
	</head>
	<body>
            <div class="menup">
                <div class="login">
                    <font size="4" align="right"> <a class="meuslinks" href="login.html" target="_blank"><b>Login</b></a></font>
                </div>
             </div>
		  <div class="cabec">
            <img src="Imagens/logomaior.png" width="300" id="logo"></img>
          </div>
     <div id='cssmenu'>
<ul>
   <li><a href="index.php"><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Livros</span></a>
      <ul>
         <li class='last'><a href="aventura.php"><span>Aventura</span></a>
         </li>
          <li class='last'><a href='policial.php'><span>Policial</span></a>
         </li>
          <li class='last'><a href='romance.php'><span>Romance</span></a>
         </li>
          <li class='last'><a href='suspense.php'><span>Suspense</span></a>
         </li>
       </ul>
     </li>
     <li class='active has-sub'><a href='#'><span>CD's</span></a>
      <ul>
             <li class='last'><a href="aventura.php"><span>Alternativo</span></a></li>
             <li class='last'><a href="aventura.php"><span>Rock</span></a></li>
                 <li class='last'><a href="aventura.php"><span>Post-Hardcore</span></a></li>
                     <li class='last'><a href="aventura.php"><span>MPB</span></a>  </li>                       
                        <li class='last'><a href="aventura.php"><span>Indie</span></a></li>
                            <li class='last'><a href="aventura.php"><span>Folk</span></a></li>
            </ul>
         </li>
   <li class='last'><a href="contato.php"><span>Contact</span></a></li>
</ul>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <font color="#eeeeee"><pre><h1>Livros</h1></pre></font>
    <hr>
         <?php
 include('conexaodb.php');
$pag = $_REQUEST['pag'];

$tamanhopag =15;

if($pag<1)
{
	$ini = 0;
} 
else
{
	$ini = ($pag - 1) * $tamanhopag;
}

// contar o número de registros
$query="SELECT * FROM produtos";
$recordset = mysql_query($query,$conn);
$registrosTotais = mysql_num_rows($recordset);

$paginas = $registrosTotais / $tamanhopag;
if(($registrosTotais % $tamanhopag)>0)
{
	$paginas = $registrosTotais / $tamanhopag + 1;
}

        $query="
        SELECT titulo, autor, preco, quantidade, id, imagem
        FROM produtos
        ORDER BY titulo
        LIMIT $ini,$tamanhopag";

       // echo $query;
print '<div class="produtos">';
        $recordset = mysql_query($query,$conn);
while($registro=mysql_fetch_assoc($recordset))
        {
    $imagem = $registro["imagem"];
	       $titulo = $registro["titulo"];
	       $autor = $registro["autor"];
           $preco = $registro["preco"]; 
           $quantidade = $registro["quantidade"];
	       $id = $registro["id"];
    if ($quantidade == 0)
    {
        print "<div class='card'><img src='$imagem' width='100' align='left'</img>
           <font size='0' align='left'><h2>$titulo</h2><h3>$autor</h3><h2>ESGOTADO</h2></font></div>";
    }
    else
            {
	           print "<a href='#' class= 'meuslinks'><div class='card'><br><img src='$imagem' width='80' align='left'</img>
           <font size='0' align='left'><h2>$titulo</h2><h3>$autor</h3><h2>R$ $preco</h2></font></div></a>";
            }
        }
echo "<table class='table'><tr><td>";
echo "<table class='tables'><tr><td><a class='meuslinksa' href='index.php?pag=1'> <<  </td>";
for($k=1;$k<=$paginas;$k++)
{
	print "<td><a class='meuslinksa' href='index.php?pag=$k'>$k</a></td>";
    
}
$k--;
echo "<td><a class='meuslinksa' href='index.php?pag=$k'> >>  </td>";
echo "</tr></table>
</div>";
        ?>
	</body>
</html>