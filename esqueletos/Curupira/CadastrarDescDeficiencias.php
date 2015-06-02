<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php
include("connection.php");
include("functions_sql.php");
$CodigoDescDefic = UltimoCodigoDescDefic()+1;

if ($acao =='salvar')
{
$DescricaoDefic = strtoupper ($DescricaoDefic);
$sql = pg_query("INSERT INTO DescDeficiencia(CodigoDescDefic,DescricaoDefic)
values($CodigoDescDefic,'$DescricaoDefic')");
if($sql)
{
echo"<script>alert('Salvo com Sucesso!');</script>";
echo"<script>onclick=location='index.php';</script>";
}
else
{
echo"<script>alert('ERRO ao tentar cadastrar...');</script>";
echo"<script>location='CadastrarDescDeficiencias.php';</script>";
}
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Tipos Deficiências</title>
        <link href='imagens/ifam-icon.png' rel='icon' type='image/x-icon'/>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/styleCadastro.css" rel="stylesheet" type="text/css" />
    </head>
    <body bgcolor="#E6E6FA">
        <a href="index.php">
            <div id="toolbar" align="center">
                <img src="imagens/ifam-logo.png" class="logoIfam" />
                <img src="imagens/logo_curiupira.jpg" class="logoCurupira" />
            </div>
        </a>
        <hr />

            <!-- Tela de Cadastro -->
            <form method="POST" action="?acao=salvar">
                <table border="1" align="center" class="boxCadastro">
                    <tr><th colspan="2">Cadastro de Descri&ccedil;&atilde;o de Deficiências<hr></th></tr>
                    <tr>
                        <input type="hidden" name="CodigoDescDefic" id="CodigoDescDefic" value="">
                        <td><label>Descricao: </label></td>
                        <td><input type="text" name="DescricaoDefic" id="DescricaoDefic"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="btnCadastro">Cadastrar</button>
                            <button type="button" name="cancelar" onclick="location='index.php'">Cancelar</button>
                        </td>
                    </tr>
                </table>
            </form>

    </body>
</html>
