<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<?php
//include("verifica_sessao.php");
include("connection.php");
include("functions_sql.php");
$CodigoCurso = UltimoCodigoCurso()+1;

if ($acao =='salvar')
{
$NomeCurso = strtoupper ($NomeCurso);
$sql = pg_query("INSERT INTO Cursos(CodigoCurso,NomeCurso,VagasCurso)
values($CodigoCurso,'$NomeCurso',$VagasCurso)");
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
        <title>Cadastro de Curso</title>
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
                    <tr><th colspan="4">Cadastro de Curso<hr></th></tr>
                    <tr>   <input type="hidden" name="CodigoCurso" id="CodigoCurso" value="">
                        <td><label>Curso: </label></td>
                        <td><input type="text" name="NomeCurso" id="NomeCurso"></td>
                    </tr>
                    <tr>
                        <td><label>Número de Vagas: </label></td>
                        <td><input type="text" name="VagasCurso" id="VagasCurso"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <button type="submit" name="btnCadastro">Cadastrar</button>
                            <button type="button" name="cancelar" onclick="location='index.php'">Cancelar</button>
                        </td>
                    </tr>
                </table>
            </form>

    </body>
</html>

