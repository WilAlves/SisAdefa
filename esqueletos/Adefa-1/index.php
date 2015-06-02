<?php
session_start();//inicia a sessao no navegador
include("conecta.php");
if ($acao == 'autenticar')
{
  //where login = '$login' and senha ='$senha' = comparando
  //login e senha digitado no form com login e senha que está
  //no banco de dados
  $sql   = pg_query("SELECT * FROM tabusuarios where login = '$login' and senha ='$senha'");
  $vetor = pg_fetch_array($sql);//preenche um vetor com os dados obtidos do pg_query
  $total = pg_num_rows($sql);//retorna o número de linhas(rows) encontrada no select.
  //Caso ache um login e senha iguais vai retornar 1 no total
  if ($total == 1)
  {
     $nome   = $vetor['nome'];
     $login  = $vetor['login'];
     $perfil = $vetor['perfil'];
     $_SESSION['nome'] = array($nome,$login,$perfil);
     echo "<script>alert('Você esta logado!');location='menuprincipal.php';</script>";
  }
  else
  {
     echo "<script>alert('Login ou Senha Inválidos!');location='index.php';</script>";
  }
}
?>
<html><head>
<title>Adefa</title>
<style>
.button, . button:focus{
         color:#000000;
         background:#FFFFFF;
         border-bottom:1px solid#333;
         border-right:1px solid#000;
         border-left:1px solid#C4C4B8;
         border-top:1px solid#C4C4B8;
         -moz-border-radius:5px;
         width:200px
         font=family:Geneva, Arial, Helvetica, sans-serif;
         font-size:30px;
         }
         .button:hover{
         background:#FF0000;
         }
          </style>
</head>
<body Bgcolor="Silver" onload="document.formlogin.login.focus();">
<form name="formlogin" method="post" action="?acao=autenticar">
<table width="40%" align="center" border="1" bgcolor="#00FFFF">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<tr>
<td colspan="2" align="center">ACESSO AO SISTEMA</td>
</tr>
<tr>
<td>LOGIN</td>
<td><input type="text" name="login" id="login" size="15"></td>
</tr>
<tr>
<td>SENHA</td>
<td><input type="password" name="senha" id="senha" size="15"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="bt" value="ENTRAR" class="button"></td>
</tr>
</table>
</form>
</body>
</html>
