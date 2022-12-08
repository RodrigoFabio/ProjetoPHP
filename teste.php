<?php
    session_start(); //necessário startar a sessão para usar
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha'])){
        //inclui o arquivo que faz a conexao com o banco de dados
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_busca = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sql_busca);

        print_r($sql_busca);
        print_r('<br>');
        print_r($result);
        print_r('<br>');
        //verifica se existem linhas com esse email e senha, ou seja, se de fato o usuario esta cadastrado no banco de dados
        if(mysqli_num_rows($result) < 1){
            
             //destruir as variaveis inseridas no login caso nao tenha cadastro no BD
             unset($_SESSION['email']);
             unset($_SESSION['senha']);
             header('Location: login.php');
        }else{
            
           $_SESSION['email'] = $email;
           $_SESSION['senha'] = $senha;
           header('Location: sistema.php');
        }
    }else{
        header('Location: login.php');
        session_abort();
    }
?>