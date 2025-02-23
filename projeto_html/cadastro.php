<?php
  include("conexao.php");

  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $telefone=$_POST['telefone'];
  $sexo=$_POST['sexo'];
  $data_nasc=$_POST['data_nasc'];
  $endereco=$_POST['endereco'];
  $cidade=$_POST['cidade'];
  $estado=$_POST['estado'];
  $senha=$_POST['senha'];
  $confirma=$_POST['confirma'];

  $sql="INSERT INTO cadastro(nome,email, telefone,sexo,data_nasc,cidade,estado,endereco,senha,confirmar senha)
   VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$senha','$confirma')";

    if(mysqli_query($conexao, $sql)){
        echo"usuario cadastrado com sucesso";
    }
    else{
        echo"Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>