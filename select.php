<?php
   require_once "conection.php";
   $query = "select id, nome, cpf from cliente";
   $result = $con->query($query);
   while($o = $result->fetch_object()){
      echo "Código: $o->id, Nome: $o->nome, Cpf: $o->cpf <br />";
   }
?>