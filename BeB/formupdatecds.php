<?php
	include ('session.php');
?>
<html>
        <head>
        <link rel="shortcut icon" href="Imagens/logo.png">
        <title>Notebooks MSI</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<STYLE TYPE= "text/css"><!--
 A.meuslinks{
    color: black;
    text-decoration: none
  }
--></STYLE>
		<link type="text/css" rel="stylesheet" href="style.css"
	</head>
    <body>
    <div class="bdmenu"> 
        <div class="menup">
                <div class="login">
                    <font size="4" align="right"> <a class="meuslinks" href="logout.php"><b>Logout</b></a></font>
                </div>
             </div>
         <div class="cabec">
            <img src="Imagens/logomaior.png" width="300" id="logo"></img></div>
<?php

include('conexaodb.php');

$id=$_REQUEST['id'];

$query="SELECT * FROM cds WHERE id=$id";
//echo $query;

$recordset = mysql_query($query,$conn);
$registro = mysql_fetch_assoc($recordset);

$album = $registro["album"];
$banda = $registro["banda"];
$estilo = $registro["estilo"];
$ano = $registro["ano"];
$preco = $registro["preco"];
$quantidade = $registro["quantidade"];
print"<div class='menul'>
            <br><br><br> <br> <br>
            <form name='inserir' method='post' action='updatecds.php'> <table width='400' border='0' cellspacing='0' cellpadding='0' class='tablecadastro'>
   <tr> 
          <td width='150'><font color='white' size='5'>ID:</font></td>
          <td width='250'><input name='id' type='text' READONLY value='$id' maxlength='75'></td>
        </tr>
        <tr> 
          <td width='150'><font color='white' size='5'>Album:</font></td>
          <td width='250'><input name='album' type='text' value='$album' maxlength='75'></td>
        </tr>
        <tr> 
          <td><font color='white' size='5'>Banda:</font></td>
          <td><input name='banda' type='text' value='$banda' maxlength='30'></td>
        </tr>
      
        <tr> 
          <td><font color='white' size='5'>Estilo:</font></td>
          <td><input name='estilo' type='text' value='$estilo' maxlength='30'></td>
        </tr>
      <tr> 
          <td><font color='white' size='5'>Ano:</font></td>
          <td><input name='ano' type='text' value='$ano' maxlength='30'></td>
        </tr>
        
        <tr> 
          <td><font color='white' size='5'>Preco:</font></td>
          <td><input name='preco' type='text' value='$preco' maxlength='30'></td>
        </tr>
        
      <tr> 
          <td><font color='white' size='5'>Quantidade:</font></td>
          <td><input name='quantidade' type='text' value='$quantidade' maxlength='30'></td>
     </tr>
        <tr> 
          <td colspan='2'><div align='center'> 
                  <input type='submit' class='botaologin' value='Editar'>
                </div></td>
        </tr>
  </table>
</form>
</div>";
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
B&B Bookstore - Todos os Direitos Reservados
</div>
        </div>
    </body>
</html>