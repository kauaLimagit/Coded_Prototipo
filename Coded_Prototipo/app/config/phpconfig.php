<?php

define("HOST",'localhost');
define("USUARIO",'root');
define("SENHA",'');
define("BD",'coded_usuarios');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die ('deu pau');

?>