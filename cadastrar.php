<?php
    Include_Once ('Conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $kogen = "INSERT INTO usuario ( email, senha, confirmar_senha) VALUES ('$email', '$senha', '$confirmar_senha')";
    $kogen = mysqli_query($conn, $kogen)
?>