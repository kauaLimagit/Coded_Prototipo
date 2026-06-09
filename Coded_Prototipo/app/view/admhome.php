<?php session_start(); require  __DIR__ . "/../config/phpconfig.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home adm</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body id="modo-escuro-texto">

    <header id="header-main" class="header-adm">
        <div id="header-options-left">
            <div class="header-option" id="nome-escola">
                <h3>Nome da Escola</h3>
            </div>
        </div>

        <div class="header-option" id="administrador">
            <h3>Administrador</h3>
        </div>

        <div id="header-logo-right">
            <div class="modoescuro" onclick="modoescuro()">
                <div class="indicador">
                    <img id="modo-icone" src="imgs/sol.png" alt="" width="25">
                </div>
            </div>
            <h3 id="company-name">CODED</h3>
        </div>
    </header>

    <?php if($_SESSION['mensagem']) { ?>
    <div id="mensagem-alerta" style="background-color: lightyellow; width: 300px; position: absolute; border: 1px solid black; margin:10px; padding: 10px; border-radius: 5px; cursor: pointer;" onclick="location.reload()">
        
        <p><?= $_SESSION['mensagem']; unset($_SESSION['mensagem']);?></p>

    </div>

    <?php } ?>

    <div id="tabela-usuarios">
        <h1>Tabela de Usuário</h1>
        <div id="adduser">
            <a href="cadastro.php"><img src="imgs/plus.png" alt=""></a>
        </div>

        <table>

            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>RA</th>
                <th>Alterar Dados</th>
                <th>Deletar Usuário</th>
            </tr>

            <?php 
                $sql = 'SELECT * FROM usuarios';

                $usuarios = mysqli_query($conexao, $sql);
                foreach($usuarios as $usuario){
            ?>

            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['usuario'] ?></td>
                <td><?= $usuario['identificador'] ?></td>
                <td>
                    <div class="icone_alt icone_acao">
                        <form action="./alteracaousuario.php" method="POST">
                            <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                            <button name="alterar" type="submit">
                                <img src="imgs/editarlapis.png" alt="">
                            </button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="icone_del icone_acao">
                        <form action="../controller/deletar.php" method="POST">
                            <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                            <button name="deletar" type="submit" onclick="return confirm('deseja deletar usuario?')">
                                <img src="imgs/lixeira.png" alt="">
                            </button>
                        </form>
                    </div>
                </td>
            </tr>  
            <?php } ?> 
            
        </table>
    </div>

    <div id="container-logout">
        <button id="logout" onclick="logout()">Logout</button>
    </div>

    <footer>
        <p>© CODED - todos os direitos reservados</p>
    </footer>
    <script src="script.js"></script>

</body>

</html>