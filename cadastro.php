<?php
include "controle.php";
?>
 <link rel="stylesheet" href="stylesobre.css">     
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-3">
            
           </div>
           

           <div class="col-md-7 text-right">
            
              <a href="#"><img src="imagens/whatsapp.png" width="40" height="40"> </a>

              <a href="#"><img src="imagens/instagram.png" width="40" height="40"> </a>

              <a href="#"><img src="imagens/facebook.png" width="40" height="40"> </a>



           </div>



        </div>
       
       
       <hr>
      </div>

    <div class="row">

        <div class="col-3"></div>
        <div class="col-md-6 m">
    <form method="post" action="processa_cadastro.php">
        <form class="text-start">
            <div class="mb-3">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" type = "text" id ="nome " name = "nome" placeholder = "informe o nome">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input class="form-control" id="login" type = "text" name = "login" placeholder = "informe o login">
            </div>
            
            <div class="mb-3">
                <label for="login" class="form-label">senha</label>
                <input class="form-control" id="senha" type = "text" name = "senha" placeholder = "informe a senha">
            </div>
            
            <div class="mb-3">
                <label for="login" class="form-label">senha</label>
                <input class="form-control" id="senha2" type = "text" name = "senha2" placeholder = "informe a senha novamente">
            </div>
            <button type="submit" class="btn btn-primary" value="registrar" onclick="return validar()">Cadastra-se</button>
            <a href="login.php" ><input type="button" class="btn btn-primary" value="login" ></a>
        </form>
        
<script>
    function validar(){
                var senha = document.getElementById("senha").value;
                var senha2 = document.getElementById("senha2").value;
                
                if (senha == senha2){
                    return true;
                } else {
                    alert("As senhas não conferem");
                    return false;
                }
                header("Location: login.php");
            }
        </script>
        


</body>
</html>

