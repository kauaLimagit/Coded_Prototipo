<?php

session_start();

require __DIR__ .  "/../config/phpconfig.php";


if (isset($_POST['deletar'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    $deletar = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['mensagem'] = 'Usuario excluido do sistema!!';
        header('Location: /../coded_prototipo_ofc/app/view/admhome.php');
    }else {
        $_SESSION['mensagem'] = 'Não foi possivel excluir usuario do sistema!!';
        header('Location: /../coded_prototipo_ofc/app/view/admhome.php');
    }
}

?>