

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <style>
    .telaLogin{
      background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
    }
    .entradaDados{
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        position: absolute;
        background-color: rgba(0,0,0,0.9);
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 50px;
        padding-bottom: 50px;;
        border-radius: 15px;
    }
    #imagemAstronauta{
        width: 250px;
        left:20%;
        top:50%;
    }
    input{
        border:none;
        padding: 10px;
    }
    .inputSubmit{
        border-radius: 4px;
        text-align: center;
        background-color: dodgerblue;
        padding: 10px;
        width: 100%;
        color: blanchedalmond;
    }
    .inputSubmit:hover{
        background-color: rgb(83, 177, 240);
        color:rgb(28, 27, 27);
    }
    a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
            top:20%;
            left:10%;
        }
        a:hover{
            background-color: dodgerblue;

        }
  </style>
  <body class="telaLogin">
   
    <div class="elementos">
    <a href="home.php">VOLTAR</a>
    <form action="teste.php" method="POST">
         <div class="entradaDados">
            <p id="login">Login</p>
            <input type="text" placeholder="Email" name="email"/>
            <br><br>
            <input type="password" placeholder="senha" name="senha"/><br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </div>

    </form>
        
        
    </div>
    
  </body>
</html>
