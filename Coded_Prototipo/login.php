<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Entrar</h1>

            <form action="../controller/login_verify.php" method="POST">
                    <div class="label-float">
                    <input name="documento" type="text" id="id" placeholder=" " required />
                    <label id="labelid">RA</label>
                    </div>
                    
                    <div class="label-float">
                        <input name="senha" type="password" id="senha" placeholder=" " required />
                        <label id="labelsenha">Senha</label>
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>

                    <div style="text-align: center; color: red;">
                        <?php 
                            if($_SESSION['mensagem']){
                        ?>

                        <label for=""><?= $_SESSION['mensagem']; unset($_SESSION['mensagem']); }?></label>
                    </div>

                    <div class="justify-center">
                        <button name="login" type="submit" id="logaruser">Entrar</button>
                    </div>
                    
                    <div class="justify-center">
                        <hr />
                    </div>

                    <p>Caso não consiga conectar, informe o superior da sua instituição para alteração de dados!</p>
                    </div>
                </div>
            </form>
        </div>
    </div>


<script src="script.js"></script>
</body>
</html>
