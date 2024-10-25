<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles2.css">
    <title>Landing-Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>

<body>
    <div id="cabeca">
       <h1>Bem Vindo(a) a Nossa Página 
        <button onclick="location.href='entrar.php'" class="botao-sair" type="button">APP HELP DESK</button>
        
    </div>
    
    <div id="main">
        <div id="Formularioimg">
            <div id="formulario">
                <h2>
                    <center>Preencha para receber notificações dos shows!</center>
                </h2>
                <center><label for="nome">Seu Nome:</label> <br>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required> <br>
                    <label for="telefone">Seu Telefone:</label> <br>
                    <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx"> <br>
                    <label for="email">Seu E-Mail:</label> <br>
                    <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required><br>
                    <label for="mensagem">Sua mensagem:</label> <br>
                    <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea> <br> <br>
                    <span>Deseja receber nossas outras novidades?</span> <br>
                    <input type="radio" name="novidades" id="sim" value="sim" checked><label for="sim">Sim</label>
                    <input type="radio" name="novidades" id="nao" value="nao"><label for="nao">Não</label> <br>
                    <a href="index.php">
                    <button>Enviar</button> </a>
                    <!-- <input type="submit" name="acao" value="Enviar" <link rel="stylesheet" href="index2.html">> -->
                </center>
                </form>
            </div>
            <div id="imagem">
                <img src="tay2.jpg" width="520">
            </div>
        </div>
    </div> 
                <div id="pe">
                    <footer>
                       <center>&copy; Copyright 2024 HTML.SENAI</center> 
                    </footer>
                </div>
</body>

</html>