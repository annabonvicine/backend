<?php
require_once("entrar.php");
?>

<?php
$arquivo = fopen('../../app_help_desk/registro.txt', 'r');

while(!feof($arquivo)){
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}

// echo"<pre>";
// print_r($chamados);
// echo"</pre>";
// ?>

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
      <img src="help_logo.png" width="38" height="35"  class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
         <li class="nav-item">
            <button onclick="location.href='logoof.php'" class= "botao-sair" type="button">SAIR</button>
         </li>
      </ul>   
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <!--aqui foi feito ma função para aparecer os chamados que foram feitos em abrir chamado  -->
            <?php
                foreach($chamados as $chamado){
                $chamados_dados = explode('#',$chamado);

                if(count($chamados_dados) < 3){
                  continue;

                }

                // echo'<pre>';
                // print_r($chamados_dados);
                // echo'</pre>';
            
            ?>


              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamados_dados[0]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[1]; ?></h6>
                  <p class="card-text"><?php echo $chamados_dados[2]; ?></p>

                </div>
              </div>

            <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>