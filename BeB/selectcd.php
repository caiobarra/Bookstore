<?php
	include ('session.php');
?>
<html>
    	<head>
        <link rel="shortcut icon" href="Imagens/logo.png">
        <title>B&B - CD's</title>
		<link type="text/css" rel="stylesheet" href="style.css">
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
            <meta charset="latin-1">
<meta name="viewport" content="width=device-width, initial-scale=1"><script>

function Deletar(id)
    {
        if (confirm("Deseja mesmo deletar esse produto?"))
          location.href='delcd.php?id='+id;
                    }

            function Editar(id)
    {
        if (confirm("Deseja mesmo editar esse produto?"))
          location.href='formupdatecds.php?id='+id;
                    }
</script>
	</head>
    <body>
        <div class="bd">
        <div class="menup">
                <div class="login">
                    <font size="4" align="right"> <a class="meuslinks" href="logout.php"><b>Logout</b></a></font>
                </div>
             </div>
            <div class="cabec">
            <a href='menu.php'><img src="Imagens/logomaior.png" width="300" id="logos"></img></a>
    </div>
        <?php

        include('conexaodb.php');
$pag = $_REQUEST['pag'];

$tamanhopag =8;

if($pag<1)
{
	$ini = 0;
} 
else
{
	$ini = ($pag - 1) * $tamanhopag;
}

// contar o número de registros
$query="SELECT * FROM cds";
$recordset = mysql_query($query,$conn);
$registrosTotais = mysql_num_rows($recordset);

$paginas = $registrosTotais / $tamanhopag;
if(($registrosTotais % $tamanhopag)>0)
{
	$paginas = $registrosTotais / $tamanhopag + 1;
}

        $ordem = $_REQUEST["ordem"];
        if($ordem == ""){
            $ordem = "banda";}
        $query="
        SELECT album, banda, estilo, ano, preco, quantidade, id
        FROM cds
        ORDER BY $ordem
        LIMIT $ini,$tamanhopag";

       // echo $query;
        $recordset = mysql_query($query,$conn);

		echo '<br><br><br><br><br><br><br><br><table class="table"><tr><td colspan="9"><a class="meuslinksa" href="addcd.php"><img src="Imagens/add.png" width="15">  Adicionar um produto</a></td></tr>
<tr><td><b><a class="meuslinksa" href="selectcd.php?ordem=album">Album </a></td> <td> <b><a class="meuslinksa" href="selectcd.php?ordem=banda"> Banda </a> </td> <td> <b><a class="meuslinksa" href="selectcd.php?ordem=estilo">Estilo</a> </td> <td> <b><a class="meuslinksa" href="selectcd.php?ordem=ano">Ano</a> </td> <td> <b><a class="meuslinksa" href="selectcd.php?ordem=preco">Preco</a> </td><td><b><a class="meuslinksa" href="selectcd.php?ordem=quantidade">Quantidade</a></td><td><b> <a class="meuslinksa" href="selectcd.php?ordem=id">ID</a> </td><td><b> Apagar </td><td><b> Editar </td></tr>';
while($registro=mysql_fetch_assoc($recordset))
        {
	       $album = $registro["album"];
	       $banda = $registro["banda"];
	       $estilo = $registro["estilo"];
	       $ano = $registro["ano"];
	       $preco = $registro["preco"];
           $quantidade = $registro["quantidade"]; 
	       $id = $registro["id"]; 
	       print "
           <tr>
             <td>$album</td>
             <td> $banda </td>
             <td> $estilo </td>
             <td> $ano </td>
             <td> R$ $preco </td>
             <td> $quantidade </td>
             <td> $id </td>
             <td><a href='javascript:void(0)' onclick='Deletar($id)'><img src='Imagens/delete.png' width='40'></a></td>
             <td><a href='javascript:void(0)' onclick='Editar($id)'><img src='Imagens/edit.png' width='40'></a></td>
             </tr>
             ";
    }
echo "</table>";
echo "<table class='table'><tr><td colspan='9'>";
echo "<table class='tables'><tr><td><a class='meuslinksa' href='selectcd.php?pag=1&ordem=$ordem'> <<  </td>";
for($k=1;$k<=$paginas;$k++)
{
	print "<td><a class='meuslinksa' href='selectcd.php?pag=$k&ordem=$ordem'>$k</a></td>";
    
}
$k--;
echo "<td><a class='meuslinksa' href='selectcd.php?pag=$k&ordem=$ordem'> >>  </td>";
echo "</tr></table>";
echo "</td></tr></table>";
    ?>
    <br><br><br><br><br><br><br>
    <div class="footer">
B&B Bookstore - Todos os Direitos Reservados
</div>
</div>
    </body>
</html>