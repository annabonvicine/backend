<?php
require_once("login.php");
?>

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
          <a class="navbar-brand" href="entrar.php">
          <img src="help_logo.png" width="38" height="35"  class="d-inline-block align-top" alt="">
            App Help Desk
          </a>
        <ul class="navbar-nav">
          <li class="nav-item">
              <button onclick="location.href='logoff.php'" class="botao-sair" type="button">SAIR</button>
          </li>
        </ul>

        </nav>
      
    <div class="chamados">
      <div class="container">    
        <div class="row">

          <div class="card-home">
            <div class="card">
              <div class="card-header">
               <center>Menu</center> 
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6 d-flex justify-content-center">
                    <a href="./abrir_chamado.php">
                      <img src="formulario_abrir_chamado.png" width="70" height="70">
                    </a>
                  </div>
                  <div class="col-6 d-flex justify-content-center">
                    <a href="./consultar_chamado.php">
                      <img src="formulario_consultar_chamado.png" width="70" height="70">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>  
  </body>
</html>