<?php
    include_once 'conexao.php';
    //usuario para login:teste@gmail.com, senha:123
?>

<!doctype html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <title>Login do Sistema</title>
  </head>
  <body>
    <div class="container">
      <div class="justify-content-center aling-items-center row">
          <div class="col-4">
            <form  action="validaLogin.php" method="POST"> 
              <div class="text-center mb-2">
                <h2>Login do Sistema</h2>
              </div>
                <div class="form-group">
                  <input type="email" class="form-control"  placeholder="informe seu email" name="email">
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" placeholder="informe sua senha" name="senha">
               </div>
               
              <button class="btn btn-primary" type="submit">Entrar</button> 
               
              
            </div>
          
          </div> 
      
      
      </div>
    
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>

<!--
//usuario para login:teste@gmail.com, senha:123 -->    
   