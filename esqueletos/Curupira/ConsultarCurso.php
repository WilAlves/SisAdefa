<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
//include("verifica_sessao.php");
include("connection.php");
include("functions_sql.php");
$font = "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Consulta de Aluno</title>
        <link href='imagens/ifam-icon.png' rel='icon' type='image/x-icon'/>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/styleConsulta.css" rel="stylesheet" type="text/css" />
    </head>
    <body bgcolor="#E6E6FA">
        <a href="index.php">
            <div id="toolbar" align="center">
                <img src="imagens/ifam-logo.png" class="logoIfam" />
                <img src="imagens/logo_curiupira.jpg" class="logoCurupira" />
            </div>
        </a>
        <hr />
    <center>
        <form method="GET" action="">
            <table border="1" align="center" class="boxSearching">
                <tr>
                    <td align="center"><label>Curso: </label></td>
                    <td align="center"><input type="text" name="q"></td>
                    <td align="center"><button type="submit" name="btnSearchQuery">Buscar</button></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="button" name="cancelar" onclick="location='index.php'">Voltar</button></td>
                </tr>
            </table>
        </form>
    </center>
    <label>Lista de Cursos:</label><hr>
            <table align="center" class="boxSearch">
                <tr>
                    <td><label>Curso: </label><labelR></labelR></td>
                    <td><label>Numero de Vagas:</label><labelR></labelR></td>
                   </tr>
                       <?php
                       $sql = pg_query("select * from Cursos");
                       $i = 0;
                       while ($vetor = pg_fetch_array($sql)){
                        if($i==0){
			               $cor ="#C1CDCD";
			               $i=1;
		                }else{
		                      $cor ="#cccccc";
		                      $i=0;
			}?>
                    <tr bgcolor="<?=$cor;?>">
                           <td><?=$font.$vetor['NomeCurso'].$font;?></td>
                           <td><?php echo $vetor['VagasCurso'];?></td>
                           <td align="center"><a href="dadoscompleto.php?CodigoCurso=<?php $vetor['CodigoCurso'];?>">
                           <img src="imagens/alterar.png" border="0" title="Clique aqui para ver DETALHES do deficiente"></a></td>
                    </tr>
          <?php    } ?>
        </table>
</body>
</html>
