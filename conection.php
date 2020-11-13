<?php
    $host  ="127.0.0.1";
    $user = "root";
    $senha = "";
    $banco = "banco1";
    $con = mysqli_connect($host, $user, $senha, $banco);
    if(!$con){
        echo "Ocorreu um erro ao conectar " . mysqli_connect_error();
    }
?>