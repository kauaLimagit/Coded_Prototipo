<?php

session_start();

require __DIR__ .  "/../config/phpconfig.php";

if(isset($_POST['login'])){
    $documento = $_POST['documento'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE identificador = '$documento' AND senha = '$senha'";

    $usuario = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($usuario) > 0){
        if($documento == 'admin' and $senha == '0000'){
            header('Location: /../coded_prototipo_ofc/app/view/admhome.php');
        }else {
            header('Location: /../coded_prototipo_ofc/app/view/login_aluno.html');
        }
    }else {
        $_SESSION['mensagem'] = 'senha ou documentação incorretas!';
        header('Location: /../coded_prototipo_ofc/app/view/login.php');
    }
}