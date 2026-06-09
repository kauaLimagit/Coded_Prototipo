<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<body>
    <div class="container">
        <div class="card">
            <h1>Cadastro</h1>

            <form action="../controller/cadastrar.php" method="POST">
                <div id="msgError" style="display:none; color:red;"></div>
                <div id="msgSuccess" style="display:none; color:green;"></div>

                <div class="label-float">
                    <input name="nome" type="text" id="Nome" placeholder=" " required />
                    <label id="labelId">Nome</label>
                </div>

                <div class="label-float">
                    <input name="usuario" type="text" id="E-mail" placeholder=" " required />
                    <label id="labelEmail">E-mail</label>
                </div>

                <div class="label-float">
                    <input name="documento" type="text" id="E-mail" placeholder=" " required />
                    <label id="labelEmail">Documentação</label>
                </div>

                <div class="campo-senha label-float">
                    <input name="senha" type="password" id="senha" placeholder=" " required />
                    <label id="labelSenha">Senha</label>
                    <i id="verSenha" onclick="revelarsenha()" class="fa fa-eye" aria-hidden="true"></i>
                </div>

                <div class="campo-senha label-float">
                    <input type="password" id="confirmSenha" placeholder="" required />
                    <label id="labelConfirmSenha" for="confirmSenha">Confirmar senha</label>
                </div>

                <div class="justify-center">
                    <button name="cadastrar" type="submit" onclick="cadastrar()">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="script.js"></script>

</html>
