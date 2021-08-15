<?php
  
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


?>

<!DOCTYPE html>
<html>
    <head>
	 <title>
	 Projeto Estoque de Tablets
	 </title>
       <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }  
        // sql para selecionar o registro
        $stmt = "SELECT * FROM produtos WHERE id = $id";
        //selecionar registros
        $stmt = $conexao->prepare($stmt);
        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);



        ?>
        <form method="POST" action="update.php">
	       <fieldset>
	      <legend>
	       Estoque de Tablets e Celulares
	      </legend>
	     <p> 
         <input type="hidden" name="id" value="<?php
            if(isset($rs['id'])) {echo $rs['id']; }

        ?>" />
	     <br>
	     <label> Marca:</label> 
	     <input type="text" name="marca" value="<?php
          if(isset($rs['marca'])) {echo $rs['marca']; }

        ?>" />
		
	     <br>
	     <label> Modelo: </label>
	     <input type="text" name="modelo" value="<?php
             if(isset($rs['modelo'])) {echo $rs['modelo']; }

        ?>" />

	     <br>
	     <label> Cor: </label>
	     <input type="text" name="cor" value="<?php
             if(isset($rs['cor'])) {echo $rs['cor']; }
        ?>" />

	     <br>
	     <label> Preço: </label>
	     <input type="number" name="preco" value="<?php
             if(isset($rs['preco'])) {echo $rs['preco']; }

         ?>" />
	      <br>
	     <legend>Dados do Fornecedor</legend>
	     <label> Nome: </label>
	     <input type="text" name="nome_fornecedor" value="<?php
             if(isset($rs['nome_fornecedor'])) {echo $rs['nome_fornecedor']; }
         ?>" />
	     <Br>
	     <label> Telefone: </label>
	     <input type="text" name="telefone" min="0" max="11" placeholder="51 999999999" value="<?php
             if(isset($rs['telefone'])) {echo $rs['telefone']; }

        ?>" />
	     <label> E-mail: </label>
	     <input type="email" name="email" value="<?php
             if(isset($rs['email'])) {echo $rs['email']; }

        ?>" />
	     <br>
	     <label> Endereço: <label>
	     <input type="text" name="endereco"  placeholder="Rua" value="<?php
             if(isset($rs['endereco'])) {echo $rs['endereco']; }

        ?>" />
	     <label> Numero: </label>
	     <input type="number" name="numero" placeholder="Nº Rua" value="<?php
             if(isset($rs['numero'])) {echo $rs['numero']; }

        ?>" />
	     <label> Cep: <label>
	     <input type="text"  name="cep" min="0" value="<?php
             if(isset($rs['cep'])) {echo $rs['cep']; }

        ?>" />
	     <br>
	     <label> Cidade: </label>
	     <input type="text" name="cidade" value="<?php
             if(isset($rs['cidade'])) {echo $rs['cidade']; }

        ?>" />
	     <label> Estado: </label>
	     <select name="estado">
	            <option value="vazio"> Selecione </option>
	            <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
				
          </select value="<?php
        	 if(isset($rs['estado'])) {echo $rs['estado']; }

            ?>" >

          <br>
	      <label> Data de Fabricaçâo: </label>
	      <input type="date" name="data_fabricacao" value="<?php
             if(isset($rs['data_fabricacao'])) {echo $rs['data_fabricacao']; }

            ?>" />
	      <br>
	      <label> Data de Cadastro no Sistema: </label>
	      <input type="date" name="data_cadastro" value="<?php
    		 if(isset($rs['data_cadastro'])) {echo $rs['data_cadastro']; }

            ?>" />
	      <br>
	 
        <input name="editar" type="submit" value="Editar">
        </form>
    </body>
</html>