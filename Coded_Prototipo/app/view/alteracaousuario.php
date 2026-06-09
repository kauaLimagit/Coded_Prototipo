<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Usuário</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<body>
    <div class="container">
        <div class="card">
            <h1>Alteração de Usuário</h1>

            <div id="msgError" style="display:none; color:red;"></div>
            <div id="msgSuccess" style="display:none; color:green;"></div>

            <form action="../controller/alterar_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $_POST['id']; ?>">
                <div class="label-float">
                    <input name="nome" type="text" id="Nome" placeholder=" " required />
                    <label id="labelId">Nome</label>
                </div>

                <div class="label-float">
                    <input name="usuario" type="text" id="E-mail" placeholder=" " required />
                    <label id="labelEmail">Novo E-mail</label>
                </div>

                <div class="campo-senha label-float">
                    <input name="senha" type="password" id="senha" placeholder=" " required />
                    <label id="labelSenha">Nova Senha</label>
                    <i id="verSenha" onclick="revelarsenha()" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="campo-senha label-float">
                    <input type="password" id="confirmSenha" placeholder=" " required />
                    <label id="labelConfirmSenha" for="confirmSenha">Confirmar Nova Senha</label>
                </div>

                <div class="justify-center">
                    <button name="alterar_user" type="submit" onclick="alterar()">Alterar</button>
                </div>
            </form>
        </div>
    </div>

</body>
 <script src="script.js"></script>
</html>
