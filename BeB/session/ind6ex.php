<html>
<body>
<?php

include('conexaodb.php');

$pag = $_REQUEST['pag'];

$tamanhopag = 6;

if($pag<1)
{
	$ini = 0;
} 
else
{
	$ini = ($pag - 1) * $tamanhopag;
}

// contar o número de registros
$query="SELECT * FROM usuarios";
$recordset = mysql_query($query,$conn);
$registrosTotais = mysql_num_rows($recordset);

$paginas = $registrosTotais / $tamanhopag;
if(($registrosTotais % $tamanhopag)>0)
{
	$paginas = $registrosTotais / $tamanhopag + 1;
}

// imprimir a página
$query="SELECT user,pw,id FROM usuarios ORDER BY id LIMIT $ini,$tamanhopag";

$recordset = mysql_query($query,$conn);

echo "<table border=0>";
while($registro=mysql_fetch_assoc($recordset))
{
	$id = $registro["id"];
	$user = $registro["user"];
	$pw = $registro["pw"];

	print "<tr>
			<td>
				<a href='formupdate.php?id=$id'>
				<img src='edit.png' width='30'></a>
			</td>
			<td>$id</td>";
	print "<td>$user</td>";
	print "<td>$pw</td></tr>";
}
echo "</table>";

for($k=1;$k<=$paginas;$k++)
{
	print "<a href='index.php?pag=$k'>$k</a> ";
}	
?>
</body>
</html>