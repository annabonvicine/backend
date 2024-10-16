<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>
      
        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
          </a>
        </nav>

        <div class="land">
          <div class="container">    
            <div class="row">

                <div class="card-login">
                  <div class="card">
                    <div class="card-header">
                    <center>Login</center>
                    </div>
                    <div class="card-body">
                      <form action="valida_login.php" method="POST">
                        <div class="forms1">
                          <!-- foi adicionado o required e o name email  -->
                          <input name="email" type="email"  class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="forms2">
                          <!-- foi adicionado o required e o name senha -->
                          <input name="senha" type="password"  class="form-control" placeholder="Senha" required>
                      
                        </div>
                        
                        <!--alem da mensagem de erro na barra de pesquisa, esse novo codigo vai fazer aparecer uma mensagem -->
                        <?php
                          if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                        ?>
                        <div class="text-danger">
                          Usuário ou senha invalido(s)
                        </div>
                        <?php } ?>  
                        <!-- aqui foi feito o erro dois para a pessoa fazer o login novamente -->
                        <?php
                          if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                        ?>
                        <div class="text-danger">
                          Faça o login primeiro!!!
                        </div>
                        <?php } ?>
                        <center> <button class="formbotao" type="submit">Entrar</button></center>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="textland">
            <center><h4>Bem-vindo ao Help Desk </h4></center>
            <p>Sua solução rápida e eficiente para suporte técnico! Aqui, você pode abrir chamados de forma simples e direta, garantindo que sua equipe de TI esteja sempre pronta para ajudar.</p>
          </div>
        </div> 

  </body>
</html>