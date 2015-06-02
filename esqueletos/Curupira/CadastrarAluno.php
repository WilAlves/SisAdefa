<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
//include("verifica_sessao.php");
include("connection.php");
include("functions_sql.php");
//$data = date("d/m/y");
$Codigo=UltimoCodigoAluno()+1;

if ($acao =='salvar')
{
$NomeAluno = strtoupper($NomeAluno);
$sql = pg_query("INSERT INTO Alunos
                      (Codigo,NomeAluno,DtNascAluno,IdadeAluno,SexAluno,EstCivilAluno,ReligAluno,ProfAluno,EmpresaAluno,
                      GrauInstruAluno,EspecifGrauAluno,StatusGrauAluno,FoneResAluno,FoneCelAluno,FoneComAluno,EmailAluno,
                      EspDeficAluno,CompleDeficAluno,TipoDeficAluno,DescDeficAluno,UsaMedicAluno,NomeMedicAluno,HoraMedicAluno,
                      AlergAluno,ConveAluno,FtAluno,Cpf,CertNasc,CompEsc,Rg,LtMed,CompResid,EndAluno,BairroAluno,
                      ZonaAluno,PontRefere,SitMoradia,NComodos,NOcupantes,
                      NomeParent1,ParentAluno1,IdadeParentAluno1,EscolaParentAluno1,AtivAtualParentAluno1,
                      NomeParent2,ParentAluno2,IdadeParentAluno2,EscolaParentAluno2,AtivAtualParentAluno2,
                      NomeParent3,ParentAluno3,IdadeParentAluno3,EscolaParentAluno3,AtivAtualParentAluno3,
                      ParentAluno,NomeCadastAluno,VincCadastAluno,EndQuemCadastAluno,BairQuemCadastAluno,FoneContResAluno,
                      FoneContCelAluno,FoneContComAluno,ObsAluno)
                VALUES
                      ($Codigo,'$NomeAluno','$DtNascAluno',$IdadeAluno,'$SexAluno','$EstCivilAluno','$ReligAluno','$ProfAluno','$EmpresaAluno',
                      '$GrauInstruAluno','$EspecifGrauAluno','$StatusGrauAluno','$FoneResAluno','$FoneCelAluno','$FoneComAluno','$EmailAluno',
                      '$EspDeficAluno','$CompleDeficAluno','$TipoDeficAluno','$DescDeficAluno','$UsaMedicAluno','$NomeMedicAluno','$HoraMedicAluno',
                      '$AlergAluno','$ConveAluno','$FtAluno','$Cpf','$CertNasc','$CompEsc','$Rg','$LtMed','$CompResid','$EndAluno','$BairroAluno',
                      '$ZonaAluno','$PontRefere','$SitMoradia','$NComodos','$NOcupantes',
                      '$NomeParent1','$ParentAluno1','$IdadeParentAluno1','$EscolaParentAluno1','$AtivAtualParentAluno1',
                      '$NomeParent2','$ParentAluno2','$IdadeParentAluno2','$EscolaParentAluno2','$AtivAtualParentAluno2',
                      '$NomeParent3','$ParentAluno3','$IdadeParentAluno3','$EscolaParentAluno3','$AtivAtualParentAluno3',
                      '$ParentAluno','$NomeCadastAluno','$VincCadastAluno','$EndQuemCadastAluno','$BairQuemCadastAluno','$FoneContResAluno',
                      '$FoneContCelAluno','$FoneContComAluno','$ObsAluno')");
if($sql)
{
echo"<script>alert('Salvo com Sucesso!');</script>";
echo"<script>onclick=location='index.php';</script>";
}
else
{
echo"<script>alert('ERRO ao tentar cadastrar...');</script>";
echo"<script>location='CadastrarAluno.php';</script>";
}
}
?>




<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Cadastro de Aluno</title>
		<script type="text/javascript">

function mascara_telefone(nm_campo)
{
tam_campo = (nm_campo.value).length;
if(tam_campo == '')
nm_campo.value = nm_campo.value + "(";

if(tam_campo == 3)
nm_campo.value = nm_campo.value + ")";

if(tam_campo == 8)
nm_campo.value = nm_campo.value + "-";
}
</script>
		<link href='imagens/ifam-icon.png' rel='icon' type='image/x-icon'/>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/styleCadastro.css" rel="stylesheet" type="text/css" />
	</head>
	<body bgcolor="#E6E6FA">
		<a href="index.php"><div id="toolbar" align="center"><img src="imagens/ifam-logo.png" class="logoIfam" /><img src="imagens/logo_curiupira.jpg" class="logoCurupira" /></div></a>
		<hr />
		<!-- Tela de Cadastro -->
        <form name="form1" method="post" action="?acao=salvar">
		<table border="1" align="center" class="boxCadastro" width="980">
			<tr><th colspan="6">Cadastro de Aluno<hr></th></tr>
			<tr>
                    <input type="hidden" name="Codigo" id="Codigo" value="">
				<td><label>Nome: </label></td>
				<td colspan="5"><input type="text" name="NomeAluno" id="NomeAluno" value=""/></td>i
			</tr>
			<tr>
				<td><label>Data de Nasc.</label></td>
				<td><input type="text" name="DtNascAluno" id="DtNascAluno" value=""/></td>
				<td><label>Idade</label></td>
				<td><input type="text" name="IdadeAluno" id="IdadeAluno"/></td>
				<td colspan="2"><label>Sexo:&nbsp;</label>
					<input type="radio" name="SexAluno" id="SexAluno" value="Masc" checked><label>Masc</label>
					<input type="radio" name="SexAluno" id="SexAluno" value="Fem"><label>Fem</label></td>
			</tr>
			<tr>
				<td><label>Est. Civil: </label></td>
				<td><select name="EstCivilAluno" id="EstCivilAluno">
					<option value="Solteiro">Solteiro</option>
					<option value="Casado">Casado</option>
					</select>
				</td>
				<td><label>Religi&atilde;o</td>
				<td><input type="text" name="ReligAluno" id="ReligAluno"/></td>
				<td><label>Profiss&atilde;o</td>
				<td><input type="text" name="ProfAluno" id="ProfAluno"/></td>
			</tr>
			<tr>
				<td><label>Empresa: </label></td>
				<td colspan="6"><input type="text" name="EmpresaAluno" id="EmpresaAluno" /></td>
			</tr>
			<tr>
				<td><label>Grau de Instru&ccedil;&atilde;o: </label></td>
				<td><select name="GrauInstruAluno" id="GrauInstruAluno">
					        <option value="Ens.Fundamental">Ens. Fundamental</option>
                            <option value="Ens.Médio">Ens. M&eacute;dio</option>
                            <option value="Ens.Técnico">Ens. T&eacute;cnico</option>
                            <option value="Graduação">Gradua&ccedil;&atilde;o</option>
                            <option value="Pós Graduação">P&oacute;s Gradua&ccedil;&atilde;o</option>
                            <option value="Outros">Outros</option>
					 </select></td>
					 	<td><label>Especifica:</label>;
                         <input type="text" name="EspecifGrauAluno" id="EspecifGrauAluno" /></td>
							<td colspan="2"><label>Status:</label>
								<input type="radio" name="StatusGrauAluno" id="StatusGrauAluno" value="Incompleto"><label>Incompleto</label>
								<input type="radio" name="StatusGrauAluno" id="StatusGrauAluno" value="Cursando"><label>Cursando</label>
								<input type="radio" name="StatusGrauAluno" id="StatusGrauAluno" value="Completo"><label>Completo</label></td>

						</tr>

			<tr>
				<td colspan="2"><label>Telefones para contato:</label></td>
				<td><label>Res:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneResAluno" id="FoneResAluno"/></td>
				<td><label>Cel:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneCelAluno" id="FoneCelAluno"/></td>
				<td><label>Com:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneComAluno" id="FoneComAluno"/></td>
			</tr>
			<tr>
				<td><label>E-mail: </label></td>
				<td colspan="5"><input type="text" name="EmailAluno" id="EmailAluno" /></td>
			</tr>
			<tr>
				<td colspan="6" align="center">Especificar Defici&ecirc;ncia:</td>
            </tr>
            <tr>
				<td colspan="2">
                    <input type="radio" name="EspDeficAluno" id="EspDeficAluno" value="Parcial"><label>Parcial</label>
				    <input type="radio" name="EspDeficAluno" id="EspDeficAluno" value="Total"><label>Total</label></td>
			    <td>
                    <label>Complemento:</label></td>
			    <td colspan="4"><input type="text" name="CompleDeficAluno" id="CompleDeficAluno"></td>
			</tr>
            <tr>
                 <td><label>Tipo de Defici&ecirc;ncia</label></td>
                 <td colspan="2">
                     <Select class="maiusculo" name="TipoDeficAluno" id="TipoDeficAluno">
                     <option><?php echo ObjetoSelectTpDeficiencia($codigodescdefic) ;?></option>
                     </select>
                     <a class="uiButton" role="button" href="CadastrarDeficiencias.php">
                     <img src="imagens/cadastrar.png" border="0" title="Clique aqui para cadastrar a defici&ecirc;ncia"></a></td>
                 <td><label>Descri&ccedil;&atilde;o</labe></td>
                 <td colspan="2">
                     <Select class="maiusculo" name="DescDeficAluno" id="DescDeficAluno">
                     <option><?php echo ObjetoSelectDescDeficiencia($CodigoDescDefic) ;?></option>
                     </select>
                     <a class="uiButton" role="button" href="CadastrarDescDeficiencias.php">
                     <img src="imagens/cadastrar.png" border="0" title="Clique aqui para cadastrar a descri&ccedil;&atilde;o da defici&ecirc;ncia"></a></td>
			</tr>
						<tr>
							<td colspan="6" align="center">Plano de Atendimento Individual:</td>
						</tr>
						<tr>
							<td colspan="3"><label>Faz uso de Medicamentos:</label>
								<input type="radio" name="UsaMedicAluno" id="UsaMedicAluno" value="Sim"><label>Sim</label>
								<input type="radio" name="UsaMedicAluno" id="UsaMedicAluno" value="Não"><label>N&atilde;o</label></td>
							<td><label>Nome do Medicamento:</label></td>
                                <td colspan="2"><input type="text" name="NomeMedicAluno" id="NomeMedicAluno" /></td>
						</tr>
						<tr>
							<td ><label>Horario:</label></td>
                            <td><input type="text" name="HoraMedicAluno" id="HoraMedicAluno"/></td>
							<td ><label>Alergico:</label></td>
                            <td><input type="text" name="AlergAluno" id="AlergAluno"/></td>
							<td ><label>Conv&ecirc;nio:</label></td>
                            <td><input type="text" name="ConveAluno" id="ConveAluno"/></td>
						</tr>
						<tr>
							<td colspan="6" align="center">Documenta&ccedil;&atilde;o Apresentada:</td>
						</tr>
						<tr>
							<td colspan="6">
								<table>
									<tr>
										<td><input type="checkbox" name="FtAluno" id="FtAluno" value="FOTO"><label>Foto 3X4</label></td>
										<td><input type="checkbox" name="Cpf" id="Cpf" value="CPF"><label>CPF</label></td>
										<td><input type="checkbox" name="CertNasc" id="CertNasc" value="CERT. NASC"><label>CERTID&AtildeO DE NASCIMENTO</label></td>
										<td><input type="checkbox" name="CompEsc" id="CompEsc" value="COMP. ESCOLARIDADE"><label>COMPROVANTE DE ESCOLARIDADE</label></td>
					    </tr>
						<tr>
										<td><input type="checkbox" name="Rg" id="Rg" value="RG"><label>RG</label></td>
										<td><input type="checkbox" name="LtMed" id="LtMed" value="LAUDO MÉDICO"><label>LAUDO M&Eacute;DICO</label></td>
										<td><input type="checkbox" name="CompResid" id="CompResid" value="COMP. RESIDÊNCIA"><label>COMPROVANTE DE RESID&Ecirc;NCIA</label></td>
						</tr>
						</table>
							</td>
						</tr>
						<tr>
							<td colspan="6" align="center">Dados de Moradia:</td>
						</tr>
						<tr>
							<td><label>Endere&ccedil;o:</label></td>
							<td colspan="5"><input type="text" name="EndAluno" id="EndAluno"/></td>
						</tr>
						<tr>
							<td><label>Bairro:</label></td>
							<td><input type="text" name="BairroAluno" id="BairroAluno" /></td>
							<td><label>Zona</label></td>
							<td><input type="text" name="ZonaAluno" id="ZonaAluno"/></td>
							<td><label>P. Referencia</label></td>
							<td><input type="text" name="PontRefere" id="PontRefere" /></td>
						</tr>
						<tr>
							<td colspan="2"><label>Situa&ccedil;&atilde;o de Moradia:</label></td>
							<td><input type="text" name="SitMoradia" id="SitMoradia"/></td>
							<td><label>N&ordm; de C&ocirc;modos</label>
								<input type="text" name="NComodos" id="NComodos"/></td>
							<td><label>N&ordm; de Ocupantes</label></td>
							<td><input type="text" name="NOcupantes" id="NOcupantes"/></td>
						</tr>
						<tr>
							<td colspan="6" align="center">Grupo Familiar:</td>
						</tr>
						<tr>
							<td><label>Nome:</label></td>
							<td colspan="3"><input type="text" name="NomeParent1" id="NomeParent1"/></td>
							<td><label>Parentesco:</label></td>
							<td><input type="text" name="ParentAluno1" id="ParentAluno1"/></td>
						</tr>
						<tr>
							<td><label>Idade:</label></td>
							<td><input type="text" name="IdadeParentAluno1" id="IdadeParentAluno1"/></td>
							<td><label>Escolaridade:</label></td>
							<td><input type="text" name="EscolaParentAluno1" id="EscolaParentAluno1"/></td>
							<td><label>Atividade Atual:</label></td>
							<td><input type="text" name="AtivAtualParentAluno1" id="AtivAtualParentAluno1"/></td>
						</tr>
      <tr>
							<td><label>Nome:</label></td>
							<td colspan="3"><input type="text" name="NomeParent2" id="NomeParent2"/></td>
							<td><label>Parentesco:</label></td>
							<td><input type="text" name="ParentAluno2" id="ParentAluno2"/></td>
						</tr>
						<tr>
							<td><label>Idade:</label></td>
							<td><input type="text" name="IdadeParentAluno2" id="IdadeParentAluno2"/></td>
							<td><label>Escolaridade:</label></td>
							<td><input type="text" name="EscolaParentAluno2" id="EscolaParentAluno2"/></td>
							<td><label>Atividade Atual:</label></td>
							<td><input type="text" name="AtivAtualParentAluno2" id="AtivAtualParentAluno2"/></td>
						</tr>
      <tr>
							<td><label>Nome:</label></td>
							<td colspan="3"><input type="text" name="NomeParent3" id="NomeParent3"/></td>
							<td><label>Parentesco:</label></td>
							<td><input type="text" name="ParentAluno3" id="ParentAluno3"/></td>
						</tr>
						<tr>
							<td><label>Idade:</label></td>
							<td><input type="text" name="IdadeParentAluno3" id="IdadeParentAluno3"/></td>
							<td><label>Escolaridade:</label></td>
							<td><input type="text" name="EscolaParentAluno3" id="EscolaParentAluno3"/></td>
							<td><label>Atividade Atual:</label></td>
							<td><input type="text" name="AtivAtualParentAluno3" id="AtivAtualParentAluno3"/></td>
						</tr>
						<tr>
							<td colspan="6" align="center">Identifica&ccedil;&atilde;o do Responsavel:</td>
						</tr>
						<tr>
							<td colspan="6"><label>&Eacute; Parente?:</label>
								<input type="radio" name="ParenteAluno" id="ParenteAluno" value="Sim"><label>Sim</label>
								<input type="radio" name="ParenteAluno" id="ParenteAluno" value="Não"><label>N&atilde;o</label></td>
						</tr>
						<tr>
							<td><label>Nome:</label></td>
							<td colspan="3"><input type="text" name="NomeCadastAluno" id="NomeCadastAluno" /></td>
							<td><label>Vinculo:</label></td>
							<td><input type="text" name="VincCadastAluno" id="VincCadastAluno"/></td>
						</tr>
						<tr>
							<td><label>Endere&ccedil;o:</label></td>
							<td colspan="3"><input type="text" name="EndQuemCadastAluno" id="EndQuemCadastAluno"/></td>
							<td><label>Bairro:</label></td>
							<td><input type="text" name="BairQuemCadastAluno" id="BairQuemCadastAluno"/></td>
						</tr>
						<tr>
							<td colspan="2"><label>Telefones para contato:</label></td>
							<td><label>Res:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneContResAluno" id="FoneContResAluno"/></td>
							<td><label>Cel:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneContCelAluno" id="FoneContCelAluno"/></td>
							<td><label>Com:</label><input type="text" onKeyPress="mascara_telefone(this);" maxLength="13" name="FoneContComAluno" id="FoneContComAluno"/></td>
						</tr>
						<tr>
							<td colspan="6" align="center">Relato Social / Observa&ccedil;&otilde;es:</td>
						</tr>
						<tr>
							<td colspan="6"><textarea name="ObsAluno" id="ObsAluno" cols="100" rows="5">T E S T E</textarea></td>
						<tr>
							<td colspan="6"><hr></td>
						</tr>
						<tr>
							<td colspan="6" align="center">
								<button type="submit" name="salvar" id="salvar">Cadastrar</button>
								<button type="button" name="cancelar" onclick="location='index.php'">Cancelar</button>
							</td>
						</tr>
					</table>
				</form>

	    </body>
</html>
