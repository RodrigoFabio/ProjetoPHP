<?php
    if(isset($_POST['submit']))
    {
            /*print_r('nome: ' . $_POST['nome']);
            print_r('<br>');
            print_r('email: ' . $_POST['email']);
            print_r('<br>');
            print_r('Telefone: ' . $_POST['telefone']);
            print_r('<br>');
            print_r('genero: ' . $_POST['genero']);
            print_r('<br>');
            print_r('Data de nascimento: ' . $_POST['dataNascimento']);*/
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sql = "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";
        $result = mysqli_query($conexao, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a id="voltar" href="home.php">VOLTAR</a>
    <div class="box">
       <form action="formulario.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de clientes</strong></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelInput" for="nome">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label class="labelInput" for="email">Email</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label class="labelInput" for="senha">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label class="labelInput" for="telefone">Telefone</label>
                </div>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br>
                <br>
                <label for="date"><b>Data de nascimento</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label class="labelInput" for="cidade">Cidade</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado"  class="labelInput" >Estado</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label class="labelInput" for="endereco">Endereço</label>
                </div><br><br>
                <input type="submit" placeholder="Enviar" id="submit" name="submit">
            </fieldset>
       </form>
    </div>
</body>
</html>