<?php
include("verifica_sessao.php");
include ("conecta.php");

if ($acao == 'excluir')
{
 $sql = pg_query("DELETE FROM tabdeficientes WHERE ficha = $ficha");
if ($sql)
{
      echo "<script>alert('Registro Excluido!');</script>";
      echo "<script>location='listardeficientes.php';</script>";
}
else
{
      echo "<script>alert('Falha na EXCLUSÃO!');</script>";
      echo "<script>location='listardeficientes.php';</script>";
 }
}
?>
<html><head>
<title>Listagem de deficientes</title>
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
<body Bgcolor="Silver">
<table width="80%" align="center" border="1"><tr>
<td align="center" bgcolor="#00B2EE"><img src="adefa.png" width="90" height="59" border="0"></td>
<td align="center" colspan="6 " align="center" bgcolor="#00B2EE">
<h2><font color="blue" size="5" face="Times New Roman">LISTA DE DEFICIENTES</h2></td></font></tr>
<tr><td align="center" bgcolor="#E8E8E8" colspan="13"><body onload="document.form1.nomepesq.focus();">
<form name="form1" method="post" action="?acao=buscar">

Pesquisar por <select name="campo" id="campo">
<option value=""> </option>
<option value="ficha">N&ordm; Ficha</option>
<option value="nomex">Nome</option></select>
<?php $nomepesq=(strtoupper($nomepesq)); ?>
:<input type="text" name="nomepesq" id="nomepesq">
<input type="submit" name="bt" value="CONSULTAR">
</td>
</form></tr>
<tr><td align="center" bgcolor="#E8E8E8">N&ordm; FICHA</td>
<td align="center" bgcolor="#E8E8E8">NOME</td>
<td align="center" bgcolor="#E8E8E8">TIPO DE DEFICI&Ecirc;NCIA</td>
<td align="center" bgcolor="#E8E8E8">DETALHES</td>
<td align="center" bgcolor="#E8E8E8">HISTORICO</td>
<td align="center" bgcolor="#E8E8E8">ALTERAR</td>
<td align="center" bgcolor="#E8E8E8">EXCLUIR</td></tr>
<?php
$sql = pg_query("SELECT * FROM tabdeficientes order by 1");
while ($vetor = pg_fetch_array($sql)){//A pg_query envia a consulta para o postres. enquanto tiverem tuplas retornadas


if ($acao == 'buscar')
{
/* if (($campo == 'ficha')&&($nomepesq = 'integer'))
  {
   echo "<script>alert('pesquisa invalida!');location='listardeficientes.php';</script>";
   exit;
  }
  */ if ($nomepesq == '')
  {
   echo "<script>alert('Pesquisa em branco');location='listardeficientes.php';</script>";
   exit;
  }
  if ($campo == '')
  {
   echo "<script>alert('Você não escolheu o tipo de PESQUISA, ficou em branco!');location='listardeficientes.php';</script>";
   exit;
  }
  $nomex = strtoupper($nomex);
  if ($campo == 'ficha')
  {
    $sqltxt = "select * from tabdeficientes where $campo = $nomepesq";
  }
   if ($campo == 'nomex')
  {

    $sqltxt = "select * from tabdeficientes where $campo LIKE '%$nomepesq%'";
  }
  $sql = pg_query($sqltxt);
}
while ($vetor = pg_fetch_array($sql)) {//A pg_query envia a
//consulta para o postgres. Um laço entrará em ação, enquanto
//tiverem registros(tuplas) sendo retornadas. Automaticamente
//será preenchido o vetor chamado $vetor
?>

<td align="center" bgcolor="#E8E8E8"><?php echo $vetor[ficha];?></td>
<td align="center" bgcolor="#E8E8E8"><?php echo $vetor['nomex'];?></td>
<td align="center" bgcolor="#E8E8E8"><?php echo $vetor['tipodefic'];?></td>

<td align="center" bgcolor="#E8E8E8">
<a href="dadoscompleto.php?ficha=<?php echo $vetor[ficha];?>">
<img src="detalhes.png" border="0" title="Clique aqui para ver DETALHES do deficiente">
</a></td>

<td align="center" bgcolor="#E8E8E8">
<a href="historico.php?ficha=<?php echo $vetor[ficha];?>">
<img src="historico.png" border="0" title="Clique aqui para ver o HISTORICO do deficiente">
</a></td>

<td align="center" bgcolor="#E8E8E8">
<a href="alterardeficientes.php?ficha=<?php echo $vetor[ficha];?>">
<img src="alterar.png" border="0" title="Clique aqui para ALTERAR deficiente">
</a></td>
<td align="center" bgcolor="#E8E8E8">
<a href="?acao=excluir&ficha=<?php echo $vetor[ficha];?>">
<img src="excluir.png" border="0" title="Clique aqui pra EXCLUIR deficiente">
</a></td>
</tr>
 <?php
}
}
?>
<tr>
<td align="center" bgcolor="#E8E8E8" colspan="13">
<input type="button" name="bt" value="VOLTAR" class="button" onclick="location='menuprincipal.php'">
</td>
</tr>
</table>
</body>
</html>
