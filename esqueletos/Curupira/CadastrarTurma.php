<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro de Turma</title>
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
                    <tr><th colspan="2s">Cadastro de Turma<hr></th></tr>
                    <tr>
                        <td><label>Turno: </label></td>
                        <td>
                            <select name="selTurno">
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                                <option value="Noturno">Noturno</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Indentificação</label></td>
                        <td>
                            <input type="text" name="txtIdentificacao"/>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Curso: </label></td>
                        <td>
                            <select name="selCursos">

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Professor: </label></td>
                        <td>
                            <select name="selProfessores">

                            </select>
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
