<?php
include("verifica_sessao.php");
include("conecta.php");

if ($acao == 'salvar')
{
  $sql = pg_query("UPDATE tabdeficientes SET ficha = $fichanovo, data = '$data', nomex = '$nomex',
  naturalidade = '$naturalidade', estado = '$estado', cidade = '$cidade', dtnascimento = '$dtnascimento',
  sexo = '$sexo', rg = '$rg', emissor = '$emissor', telefone = '$telefone', profissional = '$profissional',
  serie = '$serie', eleitor = '$eleitor',  zona = '$zona', secao = '$secao', cidade2 = '$cidade2',
  estado2 = '$estado2', cpf= '$cpf',  reservista = '$reservista', categoria = '$categoria',
  regiao = '$regiao', instrucao = '$instrucao', curso = '$curso', profissao = '$profissao',
  tipodefic = '$tipodefic', descricao = '$descricao', condloco = '$condloco', motivo = '$motivo', obs = '$obs',
  endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade3 = '$cidade3',   estado3 = '$estado3',
  complemento = '$complemento'  where ficha = $fichaatual");
  
  if ($sql)//se o sql foi executado com sucesso. Teste lógico TRUE
  {
    echo "<script>alert('Dados Alterados com Sucesso!');</script>";
    echo "<script>location='listardeficientes.php';</script>";
  }//fim if
  else
    {
      echo "<script>alert('ERRO ao tentar alterar o PACIENTE...');</script>";
      echo "<script>location='alterardeficientes.php';</script>";
    }//fim else
}//fechando o if acao==salvar
$sql = pg_query("SELECT * FROM tabdeficientes where ficha = $ficha");
$vetor = pg_fetch_array($sql);

?>


<html><head>
<title>Alterar deficientes</title>
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
.maiusculo {TEXT-TRANSFORM: uppercase;}
.scGridTabela { border-collapse: collapse }
 .scGridTabelaTd { padding: 0 }
.scGridFieldEven { background-color: #f1f5fa }
.scGridFieldEvenLink { color: #384D76 }
 .scGridFieldOver { background-color: #dfe5f6 }
        

function Formatadata(Campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(Campo.value);
				vr = vr.replace("/", "");
				vr = vr.replace("/", "");
				vr = vr.replace("/", "");
				tam = vr.length + 1;
				if (tecla != 8 && tecla != 8)
				{
					if (tam > 0 && tam < 2)
						Campo.value = vr.substr(0, 2) ;
					if (tam > 2 && tam < 4)
						Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2);
					if (tam > 4 && tam < 7)
						Campo.value = vr.substr(0, 2) + '/' + vr.substr(2, 2) + '/' + vr.substr(4, 7);
				}
			}  

</style>
</head>
<body Bgcolor="Silver">
<form name="form1" method="post" action="?acao=salvar">
<br/><table width="52%" align="center" border="1">
<tr><td colspan="1" align="center" bgcolor="#00F5FF">
<img src="adefa.png" width="150" height="55" border="0"></td>
<td align="center" colspan="8" bgcolor="#00B2EE">
<font color="blue" size="5" face="Times New Roman">ALTERAR DEFICIENTES</font><td align="center" rowspan="3" bgcolor="#E8E8E8"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">N&ordm; FICHA</td>
<td align="" colspan="5" bgcolor="#E8E8E8">
<input type="text" name="fichanovo" id="fichanovo" size="13" value="<?php echo $vetor[0];?>">
<input type="hidden" name="fichaatual" id="fichaatual" size="50" value="<?php echo $vetor[0];?>"></td>
<td align="center" bgcolor="#E8E8E8">DATA DO CADASTRO</td>
<td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" maxlength="10" onkeyup="Formatadata(this,event)" name="data" id="data" size="21" value="<?php echo $vetor['data'];?>"></td>

<tr><td align="center" bgcolor="#E8E8E8">NOME</td>
<td align="" colspan="8" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="nomex" id="nomex" size="133" value="<?php echo $vetor['nomex'];?>"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">SEXO</td><td bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="sexo" id="sexo" size="12" value="<?php echo $vetor['sexo'];?>"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">ESTADO CIVIL</td><td bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estcivil" id="estcivil" size="12" value="<?php echo $vetor['estcivil'];?>"></td>
<td align="center" bgcolor="#E8E8E8">TELEFONE</td><td align="" bgcolor="#E8E8E8"><input type="text" onKeyPress="mascara_telefone(this);" class="maiusculo" name="telefone" id="telefone" maxLength="13" size="15" value="<?php echo $vetor['telefone'];?>"></td>
<td align="center" COLSPAN="2" bgcolor="#E8E8E8">CELULAR</td><td align="" bgcolor="#E8E8E8"><input type="text" onKeyPress="mascara_telefone(this);" class="maiusculo" name="celular" id="celular" maxLength="13" size="14" value="<?php echo $vetor['celular'];?>"></td>
</tr>


<tr><td align="center" bgcolor="#E8E8E8">NATURALIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="naturalidade" id="naturalidade" size="13" value="<?php echo $vetor['naturalidade'];?>"></td>
<td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado" id="estado" size="32" value="<?php echo $vetor['estado'];?>"></td>
<td align="center" colspan="1" bgcolor="#E8E8E8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="center" colspan="2" bgcolor="#E8E8E8">&nbsp;&nbsp;DATA DE NASCIMENTO</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" maxlength="10" onkeyup="Formatadata(this,event)" name="dtnascimento" id="dtnascimento" size="25" value="<?php echo $vetor['dtnascimento'];?>"></td>

<tr><td align="center" bgcolor="#E8E8E8">RG</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="rg" id="rg" size="13" value="<?php echo $vetor['rg'];?>"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">ORG&Atilde;O EMISSOR</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="emissor" id="emissor" size="14" value="<?php echo $vetor['emissor'];?>"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">CARTEIRA PROFISSIONAL</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="profissional" id="profissional" size="10" value="<?php echo $vetor['profissional'];?>"></td>
<td align="center" bgcolor="#E8E8E8">SERIE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="serie" id="serie" size="14" value="<?php echo $vetor['serie'];?>"></td>
<tr><td align="center" bgcolor="#E8E8E8">TITULO DE ELEITOR</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="eleitor" id="eleitor" size="13" value="<?php echo $vetor['eleitor'];?>"></td>
<td align="center" bgcolor="#E8E8E8">ZONA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="zona" id="zona" size="12" value="<?php echo $vetor['zona'];?>"></td>
<td align="center" bgcolor="#E8E8E8">SE&Ccedil;&Atilde;O</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="secao" id="secao" size="12" value="<?php echo $vetor['secao'];?>"></td>
<td align="center" bgcolor="#E8E8E8">CIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="cidade2" id="cidade2" size="10" value="<?php echo $vetor['cidade2'];?>"></td>
<td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado2" id="estado2" size="14" value="<?php echo $vetor['estado2'];?>"></td>
<tr><td align="center" bgcolor="#E8E8E8">CPF</td><td align="" bgcolor="#E8E8E8"><input type="text" maxlength="14" class="maiusculo" name="cpf" id="cpf" size="13" value="<?php echo $vetor['cpf'];?>" onkeypress="formatar_mascara(this, '###.###.###-##')"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">CERT. RESERVISTA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="reservista" id="reservista" size="14" value="<?php echo $vetor['reservista'];?>"></td>
<td align="center" bgcolor="#E8E8E8">CATEGORIA</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="categoria" id="categoria" size="15" value="<?php echo $vetor['categoria'];?>"></td>
<td align="center" bgcolor="#E8E8E8">REGI&Atilde;O</td><td align="" colspan="2"bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="regiao" id="regiao" size="25" value="<?php echo $vetor['regiao'];?>"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">GRAU DE INSTRU&Ccedil;&Atilde;O</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="instrucao" id="instrucao" size="28" value="<?php echo $vetor['instrucao'];?>"></td>

<td align="center" bgcolor="#E8E8E8">CURSO</td><td align="" colspan="3" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="curso" id="curso" size="45" value="<?php echo $vetor['curso'];?>"></td>
<td align="center" bgcolor="#E8E8E8">PROFISS&Atilde;O</td><td align="" colspan="2" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="profissao" id="profissao" size="25" value="<?php echo $vetor['profissao'];?>"></td></tr>
<tr><td align="center" colspan="2" bgcolor="#E8E8E8">TIPO DE DEFICI&Ecirc;NCIA</td><td align="" bgcolor="#E8E8E8"><input type="text" name="tipodefic" id="tipodefic" size="9" value="<?php echo $vetor['tipodefic'];?>"></td>
<td align="center" bgcolor="#E8E8E8">DESCRI&Ccedil;&Atilde;O</td><td align="" colspan="2" bgcolor="#E8E8E8">
<input type="text" class="maiusculo" name="descricao" id="descricao" size="30" value="<?php echo $vetor['descricao'];?>"></td>

<td align="center" colspan="2" bgcolor="#E8E8E8">CONDI&Ccedil;&Otilde;ES DE LOCOMO&Ccedil;&Atilde;O</td><td align="" colspan="2" bgcolor="#E8E8E8">
<input type="text" class="maiusculo" name="condloco" id="condloco" size="25" value="<?php echo $vetor['condloco'];?>"></td></tr>

<tr><td align="center" colspan="3" bgcolor="#E8E8E8">MOTIVO QUE LEVOU A DEFICI&Ecirc;NCIA</td><td align="" colspan="3" bgcolor="#E8E8E8">
<input type="text" class="maiusculo" name="motivo" id="motivo" size="49" value="<?php echo $vetor['motivo'];?>"></td>

<td align="center" bgcolor="#E8E8E8">OBS / CID</td><td align="" colspan="3" bgcolor="#E8E8E8">
<input type="text" class="maiusculo" name="obs" id="obs" size="41" value="<?php echo $vetor['obs'];?>"></td></tr>


<tr><td align="center" bgcolor="#E8E8E8">ENDERE&Ccedil;O</td><td align="" colspan="3" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="endereco" id="endereco" size="47" value="<?php echo $vetor['endereco'];?>"></td>
<td align="center" bgcolor="#E8E8E8">N&ordm;</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="numero" id="numero" size="12" value="<?php echo $vetor['numero'];?>"></td>
<td align="center" bgcolor="#E8E8E8">BAIRRO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="bairro" id="bairro" size="10" value="<?php echo $vetor['bairro'];?>"></td>
<td align="center" bgcolor="#E8E8E8">CIDADE</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="cidade3" id="cidade3" size="10" value="<?php echo $vetor['cidade3'];?>"></td></tr>
<tr><td align="center" bgcolor="#E8E8E8">ESTADO</td><td align="" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="estado3" id="estado3" size="14" value="<?php echo $vetor['estado3'];?>"></td>
<td align="center" colspan="2" bgcolor="#E8E8E8">COMPLEMENTO</td><td align="" colspan="7" bgcolor="#E8E8E8"><input type="text" class="maiusculo" name="complemento" id="complemento" size="99" value="<?php echo $vetor['complemento'];?>"></td></tr>
<tr><td colspan="10" align="center" bgcolor="#E8E8E8">
<input type="submit" name="bt1" value="SALVAR" class="button">
<input type="button" name="bt2" value="VOLTAR" class="button" onclick="location='listardeficientes.php'"></td></tr>

</table></form>
</body>
</html>
