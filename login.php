<?php
include "controle.php";
?>
 <link rel="stylesheet" href="style.css">    
      
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
    <form method="post" action="autenticar.php">
        <form class="text-start">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input class="form-control" id="login" type = "text" name = "login" placeholder = "informe o login"  required>
            </div>
            
            <div class="mb-3">
                <label for="login" class="form-label">senha</label>
                <input class="form-control" id="senha" type = "text" name = "senha" placeholder = "informe a senha" required>
            </div>
            
        
            <button type="submit" class="btn btn-primary">Logar</button>
            <a href="cadastro.php" ><input type="button" class="btn btn-primary" value="cadastro" ></a>
        </form>
    


</body>
</html>