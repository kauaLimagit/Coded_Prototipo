<?php

session_start();

require __DIR__ .  "/../config/phpconfig.php";

if(isset($_POST['alterar_user'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuarios SET nome = '$nome', usuario = '$usuario', senha = '$senha' WHERE id = '$id'";

    $update = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['mensagem'] = "Usuario alterado";
        header('Location: /../coded_prototipo_ofc/app/view/admhome.php');
    }
}

?>