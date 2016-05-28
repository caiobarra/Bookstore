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
        <div class="menul">
            <br><br><br><br><br>
        <form name="inserir" method="post" action="adicionarlivro.php">
  <table width="400" border="0" cellspacing="0" cellpadding="0" class="tablecadastro">
      <tr> 
          <td width="150"><font color="white" size="5">Imagem:</font></td>
          <td width="250"><input name="imagem" type="text" id="imagem" maxlength="500"></td>
        </tr>
        <tr> 
          <td width="150"><font color="white" size="5">Titulo:</font></td>
          <td width="250"><input name="titulo" type="text" id="titulo" maxlength="75"></td>
        </tr>
        <tr> 
          <td><font color="white" size="5">Autor:</font></td>
          <td><input name="autor" type="text" id="autor" maxlength="30"></td>
        </tr>
      
        <tr> 
          <td><font color="white" size="5">Editora:</font></td>
          <td><input name="editora" type="text" id="editora" maxlength="30"></td>
        </tr>
      <tr> 
          <td><font color="white" size="5">Ano:</font></td>
          <td><input name="ano" type="text" id="ano" maxlength="30"></td>
        </tr>
   
        <tr> 
          <td><font color="white" size="5">Genero:</font></td>
          <td><input name="genero" type="text" id="genero" maxlength="30"></td>
        </tr>
        <tr> 
          <td><font color="white" size="5">Preco:</font></td>
          <td><input name="preco" type="text" id="preco" maxlength="30"></td>
        </tr>
      <tr> 
          <td><font color="white" size="5">Quantidade:</font></td>
          <td><input name="quantidade" type="text" id="quantidade" maxlength="30"></td>
        </tr>
        <tr> 
          <td> </td>
          <td> </td>
        </tr>
        <tr> 
          <td colspan="2"><div align="center"> 
                  <input name="enviar" type="submit" id="enviar" value="Inserir">
                </div></td>
        </tr>
  </table>
</form>
        </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
B&B Bookstore - Todos os Direitos Reservados
</div>
        </div>
    </body>
</html>