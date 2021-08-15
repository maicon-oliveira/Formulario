<?php

class usuario{

    public function login($email, $senha){
        global $conexao;
        $sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", md5($senha));
        $stmt->execute();
        if($stmt->rowCount() > 0 ){
            $dado = $stmt->fetch();

            $_SESSION['id'] = $dado['id'];

            return true;

    }else{
            return false;
    }
    }
}

?>