<?php
include("verifica_sessao.php");
include("conecta.php");
include("funcoes.php");
$id = UltimoIdTabHistorico() + 1;




if ($acao =='salvar')
{
$sql = pg_query("INSERT INTO tabhistoricos(id,fichadeficiente,nomedeficiente,pai,mae,mfamilia,rfamilia,historico)
values($id,$fichadeficiente,'$nomedeficiente','$pai','$mae','$mfamilia','$rfamilia','$historico')");
if($sql)
{
echo"<script>alert('Historico Salvo com Sucesso!');</script>";
echo"<script>onclick=location='menuprincipal.php';</script>";
}
else
{
echo"<script>alert('ERRO ao tentar cadastrar o Historico do DEFICIENTE...');</script>";
echo"<script>location='cadhistorico.php';</script>";
}
}
$sql = pg_query("SELECT * FROM tabdeficientes where ficha = $ficha");
$vetor = pg_fetch_array($sql);


?>

<html>
<head>
<title>Historicos</title>
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
<form name="form1" method="post" action="?acao=salvar">
<br/><table width="52%" border="1" bordercolor="blue" align="center">
<tr><td align="center" colspan="1" bgcolor="#00B2EE"><img src="adefa.png" width="180" height="79" border="0"></td>
<td align="center" colspan="1" bgcolor="#00B2EE"><font color="blue" size="6" face="Times New Roman">ADEFA</font></td></tr>


<input type="hidden" name="id" id="id" size="50" value="<?php echo $id;?>"
<tr><td align="center" bgcolor="#E8E8E8">N&ordm; FICHA</td>
<td align="" bgcolor="#E8E8E8"><input type="text" name="fichadeficiente" id="fichadeficiente" size="10" value="<?php echo $ficha;?>"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">NOME:</td><td align="" bgcolor="#E8E8E8">
<input type="text" name="nomedeficiente" id="nomedeficiente" size="100" value="<?php echo $vetor['nomex'];?>"></td></tr>

<tr><td rowspan="2" align="center" bgcolor="#E8E8E8">FILIAÇÃO  PAI / MÃE</td><td align="" bgcolor="#E8E8E8"><input type="text" name="pai" id="pai" size="100" value=""></td></tr>
<tr><td align="" bgcolor="#E8E8E8"><input type="text" name="mae" id="mae" size="100" value=""></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">MEMBROS DA FAMILIA</td><td align="" bgcolor="#E8E8E8"><input type="text" name="mfamilia" id="mfamilia" size="5" value="">
&nbsp;&nbsp;&nbsp;&nbsp;RENDA FAMILIAR&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="rfamilia" id="rfamilia" size="10" value=""></td></tr>

<tr><td align="center" rowspan="5" bgcolor="#E8E8E8">HISTORICO DO DEFICIENTE COM A ADEFA</td></tr>
<tr><td><textarea name="historico" id="historico" cols="75" rows="20"></textarea></td></tr>

<tr><td colspan="2" align="center" bgcolor="#E8E8E8">
<input type="submit" name="bt1" value="SALVAR" class="button">
<input type="button" name="bt2" value="VOLTAR" class="button" onclick="location='listardeficientes.php'"></td></tr>

</body>
</html>
