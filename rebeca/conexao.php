<?php

$conexao = mysqli_connect('localhost', 'root', '','tania', '3306');
if (!$conexao) {
    die('Não foi possivel conectar');
} else {
    echo "Conectado";
}
?>