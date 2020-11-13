<?php
  require_once "conection.php";

  $nome = "Cassia Paulino";
  $cpf = "123.123.123-23";

  $query = "INSERT INTO cliente (nome, cpf) VALUES (?, ?)";
  $cmd = mysqli_prepare($con, $query);
  $cmd->bind_param("ss", $nome, $cpf);
  $resp = $cmd->execute();
  
  if($resp){
      echo "Registro inserido";
  }else{
      echo "Falha ao inserir";
  }

  $cmd->close();
  $con->close();



?>