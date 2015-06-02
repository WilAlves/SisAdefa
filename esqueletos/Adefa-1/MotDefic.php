<?php
include("verifica_sessao.php");
include("conecta.php");
include("funcoes.php");
$codigo=UltimoCodigoMotDeficientes()+1;

if ($acao =='salvar')
{
$descricao = strtoupper ($descricao);
$sql = pg_query("INSERT INTO motdeficientes(codigo,descricao)
values($codigo,'$descricao')");
if($sql)
{
echo"<script>alert('Salvo com Sucesso!');</script>";
echo"<script>onclick=window.close();</script>";
}
else
{
echo"<script>alert('ERRO ao tentar cadastrar o tipo de deficiência...');</script>";
echo"<script>location='MotDefic.php';</script>";
}
}
?>

<html><head>
<title>Cadastro de motivos de deficiêcia</title>
<body Bgcolor="Silver">
<form name="form1" method="post" action="?acao=salvar">
<br/><table width="50%" align="center" border="1">
<tr><td align="center" bgcolor="#00F5FF"><img src="adefa.png" width="130" height="55" border="0"></td>
<td align="center" bgcolor="#00B2EE">
<font color="blue" size="4" face="Times New Roman">CADASTRO DE MOTIVOS DE DEFICIENCIA</font></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">CODIGO</td>
<td align="" bgcolor="#E8E8E8"><input type="text" name="codigo" id="codigo" size="30" readonly="readonly" value="<?php echo $codigo;?>"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">DESCRICAO</td>
<td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="descricao" id="descricao" size="30" value=""></td></tr>
<tr><td colspan="2" align="center" bgcolor="#E8E8E8">
<input type="submit" name="bt1" value="SALVAR" class="button"></td></tr>
</table></form>
</body>
</html>


