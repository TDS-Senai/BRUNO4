<?php
    include 'conecta.php';
    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];
    $funcionario = mysqli_query($conn, "SELECT * FROM funcionarios WHERE login='$nome' AND senha='$senha'");
    $row = mysqli_num_rows($funcionario);
    if ($row > 0) {
        echo "<script language='javascript' type='text/javascript'>
            window.location.href='main.php'
            </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Login ou senha inválido, tente novamente!');
            window.location.href='index.php'
            </script>";
    }
?>