<?php
 
   //faz a importação da biblioteca de conexão
   require_once "conection.php";
   //recebe o id do usuário

   $id = 1;
   $query = "select nome, cpf from cliente where id > ?";
   //utiliza a conexao criada no arquivo connection para preparar o sql para ser executado
   $cmd = $con->prepare($query);
   //seta o param no id, obs deve ser variavel
   $cmd->bind_param("i", $id);
   
   //cria as variaveis que irão receber o resultado e vincula de acordo com o select 
   $nome = ""; $cpf="";
   $cmd->bind_result($nome, $cpf);

   //executada o comando
   $cmd->execute();

   //enquanto houver coisas para buscar
   while($cmd->fetch()){
       echo "Nome: $nome, CPF: $cpf <br />";
   }