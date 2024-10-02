<?php
include 'class/contatos.class.php';
$contato = new Contatos();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dt_nasc = $_POST['dt_nasc'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];

    if(!empty($email)){
        $contato->editar($nome, $telefone, $endereco, $dt_nasc, $linkedin, $email, $foto, $id);
    }
    header("Location: /backsenac");
}