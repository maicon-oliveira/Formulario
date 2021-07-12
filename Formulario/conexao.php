<?php
        session_start();
        global $conexao;
try {
    $conexao = new PDO("mysql:host=localhost;dbname=estoque_produtos", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
    echo "<p>Erro na conexão:" . $erro->getMessage() . "</p>";
}
/*Credenciais de acesso ao BD.
 define('HOST', 'localhost');
 define('USER', 'root');
 define('PASS', '');
 define('DBNAME', 'estoque_produtos');


 $conexao = new PDO('mysql:host=' . HOST . ';dbname='. DBNAME . ';', USER, PASS);
 */       
 

 
 
?>
 
 

