<?php
include("verifica_sessao.php");
include("funcoes.php");
$font = "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>";
$font2 = "<font size='4' face='Arial Black'>";
$ffont = "</font>";

$sql = pg_query("SELECT   count (*) FROM tabdeficientes where (dtnascimento between '1991/01/01' and '1998/12/31') ORDER BY 1;");



?>


<html>
<head>
<title>Pesquisas</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<table width="70%" border="1" align="center" cellpading="0" cellspacing="0">
<tr>
<td align="center" colspan="6"><?php echo $font2."QUANTOS DEFICIENTES S&Atilde;O ADOLESCENTE".$ffont; ?></td>
</tr>
<tr>
<td align="center"><?=$font."FAIXAS".$ffont; ?></td>
<td align="center"><?=$font."QUANTIDADE".$ffont; ?></td>
</tr>
<?php
$i = 0;
while($vetor=pg_fetch_array($sql)) {
if ($i % 2 == 0) $cor = "#DEB887"; else $cor = "#CD853F";
?>
<tr bgcolor="<?=$cor;?>">
<td align="center">ADOLESCENTE</td>
<td align="center"><?=$font.($vetor['count']).$ffont;?></td>
</tr>
<?
$i++;
} ?>
</table>
<div align="center"><input type="button" name="bt" class="button" value="Voltar" onclick="location='pesqfases.php'"></div>
</body>
</html>
