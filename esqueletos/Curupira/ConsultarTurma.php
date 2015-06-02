<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
                    <td align="center"><label>Identificação: </label></td>
                    <td align="center"><input type="text" name="q"></td>
                    <td align="center"><button type="submit" name="btnSearchQuery">Buscar</button></td>
                </tr>
            </table>
        </form>
    </center>
    <label>Pesquisa:</label><hr>

            <table align="center" class="boxSearch">
                <tr><td><label>Identificação: </label><labelR></labelR></td></tr>
                <tr><td><label>Turno: </label><labelR></labelR></td></tr>
                <tr>
                    <td><label>Curso: </label><labelR></labelR></td>
                    <td><label>Professor: </label><labelR></labelR></td>
                </tr>
        </table>


</body>
</html>
