<?php
      
       
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
      require 'conexao.php';
      require 'classUsuario.php';

      $u = new usuario();
      
        //Usuario para acesso email:teste@gmail.com  senha:123
       $email = addslashes($_POST['email']);
       $senha = addslashes($_POST['senha']);

      if($u->login($email, $senha) == true){
        if(isset($_SESSION['id'])){
            header("location: lista_estoque.php");
        }else{
            header("location: index.php");
        }
      }else{
        header("location: index.php");
      }
          
        }else{
            header("location: index.php");
        }
    
    
     
?>
