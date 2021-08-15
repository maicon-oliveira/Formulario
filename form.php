<?php
    session_start();
	
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

        ?>
        <form method="POST" action="processa.php">
	       <fieldset>
	      <legend>
	       Estoque de Tablets e Celulares
	      </legend>
	     <p> 
	      <input type="hidden" name="id" value="<?php
        	// Preenche o id no campo id com um valor "value"
        	echo (isset($id) && ($id != null || $id != "")) ? $id : '';

        ?>" />
	     <br>
	     <label> Marca:</label> 
	     <input type="text" name="marca" required value="<?php
         // Preenche a marca no campo marca com um valor "value"
        	echo (isset($marca) && ($marca != null || $marca != "")) ? $marca : '';

        ?>" />
		
	     <br>
	     <label> Modelo: </label>
	     <input type="text" name="modelo" required value="<?php
        // Preenche o modelo no campo modelo com um valor "value"
        	echo (isset($modelo) && ($modelo != null || $modelo != "")) ? $modelo : '';

        ?>" />

	     <br>
	     <label> Cor: </label>
	     <input type="text" name="cor" required value="<?php
         // Preenche a cor no campo cor com um valor "value"
        	 echo (isset($cor) && ($cor != null || $cor != "")) ? $cor : '';

        ?>" />

	     <br>
	     <label> Preço: </label>
	     <input type="number" name="preco" required value="<?php
        // Preenche o preco no campo preco com um valor "value"
        	echo (isset($preco) && ($preco != null || $preco != "")) ? $preco : '';

         ?>" />
	      <br>
	     <legend>Dados do Fornecedor</legend>
	     <label> Nome: </label>
	     <input type="text" name="nome_fornecedor" required value="<?php
        // Preenche o nome no campo nome com um valor "value"
        	echo (isset($nome_fornecedor) && ($nome_fornecedor != null || $nome_fornecedor != "")) ? $nome_fornecedor : '';

         ?>" />
	     <Br>
	     <label> Telefone: </label>
	     <input type="text" name="telefone" min="0" max="11" placeholder="51 999999999" value="<?php
        // Preenche o telefone no campo telefone com um valor "value"
        	echo (isset($telefone) && ($telefone != null || $telefone != "")) ? $telefone : '';

        ?>" />
	     <label> E-mail: </label>
	     <input type="email" name="email" value="<?php
		// Preenche o email no campo email com um valor "value"
        	echo (isset($email) && ($email != null || $email != "")) ? $email : '';

        ?>" />
	     <br>
	     <label> Endereço: <label>
	     <input type="text" name="endereco" required placeholder="Rua" value="<?php
        // Preenche o endereco no campo endereco com um valor "value"
        	echo (isset($endereco) && ($endereco != null || $endereco != "")) ? $endereco : '';

        ?>" />
	     <label> Numero: </label>
	     <input type="number" name="numero" required placeholder="Nº Rua" value="<?php
        // Preenche o numero no campo numero com um valor "value"
            echo (isset($numero) && ($numero != null || $numero != "")) ? $numero : '';

        ?>" />
	     <label> Cep: <label>
	     <input type="text"  name="cep" min="0" required value="<?php
        // Preenche o cep no campo cep com um valor "value"
            echo (isset($cep) && ($cep != null || $cep != "")) ? $cep : '';

        ?>" />
	     <br>
	     <label> Cidade: </label>
	     <input type="text" name="cidade" value="<?php
		// Preenche a cidade no campo cidade com um valor "value"
            echo (isset($cidade) && ($cidade != null || $cidade != "")) ? $cidade : '';

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
        	// Preenche o estado no campo estado com um valor "value"
        	 echo (isset($estado) && ($estado != null || $estado != "")) ? $estado : '';

            ?>" >

          <br>
	      <label> Data de Fabricaçâo:  </label>
	      <input type="date" name="data_fabricacao" required value="<?php
        	// Preenche a data_fabricacao no campo data_fabricacao com um valor "value"
        	echo (isset($data_fabricacao) && ($data_fabricacao != null || $data_fabricacao != "")) ? $data_fabricacao : '';

            ?>" />
	      <br>
	      <label> Data de Cadastro no Sistema: </label>
	      <input type="date" name="data_cadastro" required value="<?php
    		// Preenche a data_cadastro no campo data_cadastro com um valor "value"
            echo (isset($data_cadastro) && ($data_cadastro != null || $data_cadastro != "")) ? $data_cadastro : '';

            ?>" />
	      <br>
	 
        <input name="salvar" type="submit" value="Cadastrar Produto">
        <a href name="editar.php" type="submit" value="Editar">
        <?php echo "<a href='lista_estoque.php'>Consultar estoque</a><br>";
        ?>







        </form>
       </body>







</html>