<?php
include("verifica_sessao.php");
include("funcoes.php");
$font = "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>";
$font2 = "<font size='4' face='Arial Black'>";
$ffont = "</font>";

$sql = pg_query("SELECT condloco, count(condloco) FROM tabdeficientes GROUP BY 1 ORDER BY 1;");

//  $sql = pg_query("SELECT DISTINCT tipodefic FROM tabdeficientes");
//SELECT cod_produto,sum(qtde) AS totalqtde  FROM tabitensvenda GROUP BY cod_produto ORDER BY totalqtde DESC
//$vetor['totaltipodefic'] = totaltipodefic +1;       SELECT nome, COUNT(*) AS quant FROM pedidos GROUP BY nome HAVING quant > 1
//}
//echo "$sql";

?>


<html>
<head>
<title>Pesquisas</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<table width="70%" border="1" align="center" cellpading="0" cellspacing="0">
<tr>
<td align="center" colspan="6"><?php echo $font2."QUANTIDADE DE DEFICIENTES POR CONDI&Ccedil;&Otilde;ES DE LOCOMO&Ccedil;&Atilde;O".$ffont; ?></td>
</tr>
<tr>
<td align="center"><?=$font."DEFICIENCIA".$ffont; ?></td>
<td align="center"><?=$font."QUANTIDADE".$ffont; ?></td>
</tr>
<?php
$i = 0;
while($vetor=pg_fetch_array($sql)) {
if ($i % 2 == 0) $cor = "#DEB887"; else $cor = "#CD853F";
?>
<tr bgcolor="<?=$cor;?>">
<td align="center"><?=$font.$vetor['condloco'].$ffont;?></td>
<td align="center"><?=$font.($vetor['count']).$ffont;?></td>
</tr>
<?
$i++;
} ?>
</table>
<div align="center"><input type="button" name="bt" class="button" value="Voltar" onclick="location='Escolhapesquisas.php'"></div>
</body>
</html>
