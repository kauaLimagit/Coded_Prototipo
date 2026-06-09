<?php

session_start();
require __DIR__ .  "/../config/phpconfig.php";

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $documento = $_POST['documento'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome,identificador,usuario,senha) VALUES ('$nome', '$documento', '$usuario', '$senha')";

    mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['mensagem'] = "Usuario(a) $nome foi criado(a) com sucesso!";
        header('Location: /../coded_prototipo_ofc/app/view/admhome.php');
    }else {
        echo 'fudeu';
    }
}

?>