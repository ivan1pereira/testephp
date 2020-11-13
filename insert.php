<?php
  require_once "conection.php";

  $nome = "Lorena Paulino";
  $cpf = "123.123.123-23";

  $query = "INSERT INTO cliente (nome, cpf) VALUES (?, ?)";
  $cmd = $con->prepare($query);
  $cmd->bind_param("ss", $nome, $cpf);
  $resp = $cmd->execute();
  
  if($resp){
      echo "Registro inserido " . $con->insert_id;
  }else{
      echo "Falha ao inserir";
  }

  $cmd->close();
  $con->close();



?>