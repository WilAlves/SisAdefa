<?php
include("verifica_sessao.php");
include("conecta.php");
include("funcoes.php");
//$data = date("d/m/y");
//$ficha = UltimoFichaTabDeficientes()+1;

if ($acao =='salvar')
{
	insert_deficientes();
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?=$title;?></title>
		<link href='image/logo.png' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
	</head>
	<script src="js/functions.js"></script>

	<body align="center" bgcolor="#cccccc">
		<a href="main.php">
			<div id="toolbar" align="center">
				<img src="image/logo2.png" class="logoIfam" />
				<img src="image/logo3.png" class="logoCurupira" />
			</div>
		</a>
		<hr />
		<table border="1" align="center" id="boxMaster">
<form name="form1" method="post" action="?acao=salvar">
<br/><table width="52%" align="center" border="1">
<tr><td align="center" colspan="1" bgcolor="#00F5FF"><img src="adefa.png" width="150" height="55" border="0"></td>
<td colspan="8" align="center" bgcolor="#00B2EE">
<font color="blue" size="5" face="Times New Roman">CADASTRO DE DEFICIENTES</font><td align="center" rowspan="3" bgcolor="#E8E8E8">
<a class="uiButton" role="button" href="javascript:abrejanela('CadastroWebCam.php?retorno=ficha', 'calendario', 'width=116,height=160,toolbar=no,
location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes')" title="Use uma webcam para tirar uma foto para o perfil do Cadastro">
<i class="mrs img sp_41iqr3 sx_bdcf65"></i><span class="uiButtonText">Tirar uma foto</span></a>
</td></tr>
<tr><td align="center" bgcolor="#E8E8E8">N&ordm; FICHA</td>
<td align="" colspan="5" bgcolor="#E8E8E8"><input type="text" name="ficha" id="ficha" size="13" value=""></td>
<td align="center" bgcolor="#E8E8E8">DATA DO CADASTRO</td>
<td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" maxlength="10" onkeyup="Formatadata(this,event)" name="data" id="data" size="21" value=""></td>

<tr><td align="center" bgcolor="#E8E8E8">NOME</td>
<td align="" colspan="8" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="nomex" id="nomex" size="133" value=""></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">SEXO</td>
<td bgcolor="#E8E8E8"><Select class="maiusculo" name="sexo" id="sexo">
<option value="">&nbsp;&nbsp;&nbsp;</option>
<option value="Masculino">Masculino&nbsp;&nbsp;</option>
<option value="Feminino">Feminino&nbsp;&nbsp;</option>
</select></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">ESTADO CIVIL</td>
<td bgcolor="#E8E8E8"><Select class="maiusculo" name="estcivil" id="estcivil">
<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
<option value="Casado">Casado</option>
<option value="Solteiro">Solteiro</option>
<option value="Divorciado">Divorciado</option>
<option value="Viuvo">Vi&uacute;vo</option>
<option value="Convivente">Convivente</option>
</select></td>
<td align="center" bgcolor="#E8E8E8">TELEFONE</td><td align="" bgcolor="#E8E8E8"><input type="text" onKeyPress="mascara_telefone(this);" name="telefone" id="telefone" maxLength="13" size="15" value=""></td>
<td align="center" COLSPAN="2" bgcolor="#E8E8E8">CELULAR</td><td align="" bgcolor="#E8E8E8"><input type="text" onKeyPress="mascara_telefone(this);" name="celular" id="celular" maxLength="13" size="14" value=""></td>
</tr>


<tr><td align="center" bgcolor="#E8E8E8">NATURALIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="naturalidade" id="naturalidade" size="13" value=""></td>
<td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado" id="estado" size="32" value=""></td>
<td align="center" colspan="1" bgcolor="#E8E8E8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="center" colspan="2" bgcolor="#E8E8E8">&nbsp;&nbsp;DATA DE NASCIMENTO</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" maxlength="10" onkeyup="Formatadata(this,event)" name="dtnascimento" id="dtnascimento" size="25" value=""></td>

<tr><td align="center" bgcolor="#E8E8E8">RG</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="rg" id="rg" size="13" value=""></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">ORG&Atilde;O EMISSOR</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="emissor" id="emissor" size="14" value=""></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">CARTEIRA PROFISSIONAL</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="profissional" id="profissional" size="10" value=""></td>
<td align="center" bgcolor="#E8E8E8">SERIE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="serie" id="serie" size="14" value=""></td>
<tr><td align="center" bgcolor="#E8E8E8">TITULO DE ELEITOR</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="eleitor" id="eleitor" size="13" value=""></td>
<td align="center" bgcolor="#E8E8E8">ZONA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="zona" id="zona" size="12" value=""></td>
<td align="center" bgcolor="#E8E8E8">SE&Ccedil;&Atilde;O</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="secao" id="secao" size="12" value=""></td>
<td align="center" bgcolor="#E8E8E8">CIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="cidade2" id="cidade2" size="10" value=""></td>
<td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado2" id="estado2" size="14" value=""></td>
<tr><td align="center" bgcolor="#E8E8E8">CPF</td><td align="" bgcolor="#E8E8E8"><input type="text" maxlength="14" class="maiusculo" name="cpf" id="cpf" size="13" value="" onkeypress="formatar_mascara(this, '###.###.###-##')"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">CERT. RESERVISTA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="reservista" id="reservista" size="14" value=""></td>
<td align="center" bgcolor="#E8E8E8">CATEGORIA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="categoria" id="categoria" size="15" value=""></td>
<td align="center" bgcolor="#E8E8E8">REGI&Atilde;O</td><td align="" colspan="2"bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="regiao" id="regiao" size="25" value=""></td></tr>

<tr><td align="center" bgcolor="#E8E8E8">GRAU DE INSTRU&Ccedil;&Atilde;O</td>
<td align="" colspan="2" bgcolor="#E8E8E8"><Select class="maiusculo" name="instrucao" id="instrucao">
<option value="">&nbsp;&nbsp;</option>
<option value="analfabeto">Analfabeto</option>
<option value="primario">Primario</option>
<option value="Fundamental Incompleto">Fundamental Incompleto</option>
<option value="Fundamental Completo">Fundamental Completo</option>
<option value="Medio Incompleto">Medio Incompleto</option>
<option value="Medio Completo">Medio Completo</option>
<option value="Medio Profissionalizante">Medio Profissionalizante</option>
<option value="Superior Incompleto">Superior Incompleto</option>
<option value="Superior Completo">Superior Completo</option>
</select></td>

<td align="center" bgcolor="#E8E8E8">CURSO</td><td align="" colspan="3" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="curso" id="curso" size="53" value=""></td>
<td align="center" bgcolor="#E8E8E8">PROFISS&Atilde;O</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="profissao" id="profissao" size="25" value=""></td></tr>
<tr><td align="center" colspan="2" bgcolor="#E8E8E8">TIPO DE DEFICI&Ecirc;NCIA&nbsp;&nbsp;&nbsp;<a class="uiButton" role="button" href="javascript:abrejanela('cadtpdefic.php','calendario', 'width=450,height=220,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes')">
<img src="alterar.png" border="0" title="Clique aqui para cadastrar a deficiência"></a></td>
<td align="" bgcolor="#E8E8E8"><Select class="maiusculo" name="tipodefic" id="tipodefic">
<option><?php echo ObjetoSelectTpDeficiencia($codigo) ;?></option>
</select></td>
<td align="center" bgcolor="#E8E8E8">DESCRI&Ccedil;&Atilde;O <a class="uiButton" role="button" href="javascript:abrejanela('DescDefic.php','calendario', 'width=450,height=220,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes')">
<img src="alterar.png" border="0" title="Clique aqui para cadastrar a deficiência"></a></td>
<td align="" colspan="2" bgcolor="#E8E8E8">
<Select class="maiusculo" name="descricao" id="descricao">
<option><?php echo ObjetoSelectDescDeficiencia($codigo) ;?></option>
</select></td>

<td align="center" colspan="2" bgcolor="#E8E8E8">CONDI&Ccedil;&Otilde;ES DE LOCOMO&Ccedil;&Atilde;O<a class="uiButton" role="button" href="javascript:abrejanela('CondLocDefic.php','calendario', 'width=450,height=220,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes')">
<img src="alterar.png" border="0" title="Clique aqui para cadastrar a deficiência"></a></td>
<td align="" colspan="2" bgcolor="#E8E8E8"><Select class="maiusculo" name="condloco" id="condloco">
<option><?php echo ObjetoSelectCondLocDeficiencia($codigo) ;?></option>
</select></td></tr>

<tr><td align="center" colspan="3" bgcolor="#E8E8E8">MOTIVO QUE LEVOU A DEFICI&Ecirc;NCIA <a class="uiButton" role="button" href="javascript:abrejanela('MotDefic.php','calendario', 'width=450,height=220,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes')">
<img src="alterar.png" border="0" title="Clique aqui para cadastrar a deficiência"></a></td><td align="" colspan="3" bgcolor="#E8E8E8">
<Select class="maiusculo" name="motivo" id="motivo">
<option value=""><?php echo ObjetoSelectMotDeficiencia($codigo) ;?></option>
</select></td>

<td align="center" bgcolor="#E8E8E8">OBS / CID</td><td align="" colspan="3" bgcolor="#E8E8E8">
<input type="text" class="maiusculo" name="obs" id="obs" size="41" value=""></td></tr>


<tr><td align="center" bgcolor="#E8E8E8">ENDERE&Ccedil;O</td><td align="" colspan="3" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="endereco" id="endereco" size="47" value=""></td>
<td align="center" bgcolor="#E8E8E8">N&ordm;</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="numero" id="numero" size="12" value=""></td>
<td align="center" bgcolor="#E8E8E8">BAIRRO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="bairro" id="bairro" size="10" value=""></td>
<td align="center" bgcolor="#E8E8E8">CIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="cidade3" id="cidade3" size="13" value=""></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado3" id="estado3" size="14" value=""></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">COMPLEMENTO</td><td align="" colspan="7" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="complemento" id="complemento" size="106" value=""></td></tr>
<tr><td colspan="10" align="center" bgcolor="#E8E8E8">
<input type="submit" name="bt1" value="SALVAR" class="button">
<input type="button" name="bt2" value="VOLTAR" class="button" onclick="location='menuprincipal.php'"></td></tr>
</table></form>
</body>
</html>
