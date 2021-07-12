<?php
    session_start();
    include_once 'conexao.php';
    
    //Verificar se o usuario clicou no botão, se sim acessa o IF e tenta cadastrar, caso
    //contrario acessa o else.
    
     $editar= filter_input(INPUT_POST, 'editar', FILTER_SANITIZE_STRING);
     if($editar){
         //Receber os dados do Formulario.
        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_POST,'marca', FILTER_SANITIZE_STRING);
        $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
        $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
        $nome_fornecedor = filter_input(INPUT_POST, 'nome_fornecedor', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $numero= filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
        $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
        $data_fabricacao = filter_input(INPUT_POST, 'data_fabricacao', FILTER_SANITIZE_STRING);
        $data_cadastro = filter_input(INPUT_POST, 'data_cadastro', FILTER_SANITIZE_STRING);

        //Update dos dados.
        $stmt = "UPDATE produtos SET marca=:marca, modelo=:modelo, cor=:cor, preco=:preco,
        nome_fornecedor=:nome_fornecedor, telefone=:telefone, email=:email, endereco=:endereco,
        numero=:numero, cep=:cep, cidade=:cidade, estado=:estado, data_fabricacao=:data_fabricacao,
        data_cadastro=:data_cadastro WHERE id=$id";
          $stmt = $conexao->prepare($stmt);
          $stmt->bindParam(':marca', $marca);
          $stmt->bindParam(':modelo', $modelo);
          $stmt->bindParam(':cor', $cor);
          $stmt->bindParam(':preco', $preco);
          $stmt->bindParam(':nome_fornecedor', $nome_fornecedor);
          $stmt->bindParam(':telefone', $telefone);
          $stmt->bindParam(':email', $email);
          $stmt->bindParam(':endereco', $endereco);
          $stmt->bindParam(':numero', $numero);
          $stmt->bindParam(':cep', $cep);
          $stmt->bindParam(':cidade', $cidade);
          $stmt->bindParam(':estado', $estado);
          $stmt->bindParam(':data_fabricacao', $data_fabricacao);
          $stmt->bindParam(':data_cadastro', $data_cadastro);
        if ($stmt->execute()){
            $_SESSION['msg'] = "<p style='color:green;'>Editado com sucesso!</p>";
            header("location: form.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'> Não foi editado com sucesso!</p>";
            header("location: form.php");
        }


     }else{
         $_SESSION['msg'] = "<p style='color:red;'> Não foi editado com sucesso!</p>";
         header("location: form.php");
         

     }



?>