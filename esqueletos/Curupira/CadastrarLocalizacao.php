<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Localização</title>
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
            <form method="POST" action="">
                <table border="1" align="center" class="boxCadastro">
                    <tr><th colspan="2">Cadastro de Localização<hr></th></tr>
                    <tr>
                        <td><label>Nome: </label></td>
                        <td><input type="text" name="txtNome"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>Endereço</legend>
                                <table>
                                    <tr>
                                        <td><label>Rua: </label></td>
                                        <td><input type="text" name="txtRua" /></td>
                                    </tr>
                                    <tr>
                                        <td><label>Numero: </label></td>
                                        <td><input type="text" name="txtNumero" /></td>
                                    </tr>
                                    <tr>
                                        <td><label>Complemento: </label></td>
                                        <td><textarea lang="pt-BR" name="txtAComplemento"></textarea></td>
                                    </tr>
                                </table>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="btnCadastro">Cadastrar</button>
                        </td>
                    </tr>
                </table>
            </form>

    </body>
</html>
