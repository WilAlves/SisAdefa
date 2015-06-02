<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Consulta de Professor</title>
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
                    <td align="center"><label>Nome: </label></td>
                    <td align="center"><input type="text" name="q"></td>
                    <td align="center"><button type="submit" name="btnSearchQuery">Buscar</button></td>
                </tr>
            </table>
        </form>
    </center>
    <label>Pesquisa:</label><hr>
            <table align="center" class="boxSearch">
                <tr><td><label>Nome: </label><labelR></labelR></td></tr>
        <tr>
            <td >
                <fieldset>
                    <legend>Conhecimentos Específicos</legend>
                    <labelF></labelF>
                </fieldset>
            </td>
        </tr>
        </table>


</body>
</html>
