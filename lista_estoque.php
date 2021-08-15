<?php
        
 include_once 'conexao.php';

?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <title>Estoque de Celulares</title>
</head>
<body>
<fieldset>
	      <legend>
	       Estoque de Tablets e Celulares
	      </legend>
        <?php echo "<a href='form.php'>Cadastrar Produto</a><br>";
        ?>
                

<?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }  
    
    
           $consulta = ("SELECT id, marca, modelo, cor, preco,
            nome_fornecedor, data_fabricacao, data_cadastro FROM produtos ORDER BY id ASC");

           $stmt = $conexao->prepare($consulta);
           $stmt->execute();

           while($rs = $stmt->fetch(PDO::FETCH_ASSOC)){ 
                     "id: " .  $rs['id'] . "<br>";
                echo "Marca: " . $rs['marca'] . "<br>";
                echo "Modelo: " . $rs['modelo'] . "<br>";
                echo "Cor: " . $rs['cor'] . "<br>";
                echo "Preço: " . $rs['preco'] . "<br>";
                echo "Fornecedor: " . $rs['nome_fornecedor'] . "<br>";
                echo "Data Fabricação: " . $rs['data_fabricacao'] . "<br>";
                echo "Data Cadastro: " . $rs['data_cadastro'] . "<br>"; 
                


                echo "<a href='editar.php?id=".  $rs['id'] ."'>Editar</a><br>";
                echo "<a href='delete.php?id=".  $rs['id'] ."'>Excluir</a><br><hr>";


           }



        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>







</html>