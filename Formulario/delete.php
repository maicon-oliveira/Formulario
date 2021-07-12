<?php
    include_once 'conexao.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $exlcuir= filter_input(INPUT_POST, 'excluir', FILTER_SANITIZE_STRING);

   $stmt = $conexao->prepare("DELETE FROM produtos WHERE id=$id");
   if ($stmt->execute()){
    $_SESSION['msg'] = "<p style='color:green;'>Excluido com sucesso!</p>";
    header("location: lista_estoque.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'> Falha ao exlcuir!</p>";
    header("location: lista_estoque.php");
}
?>
