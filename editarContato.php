<?php
include 'class/contatos.class.php';
$contato = new Contatos();

if(!empty($_GET['id'])){
    
    $id = $_GET['id'];
    $info = $contato->buscar($id);
    if(empty($info['email'])){
        header("Location: /backsenac");
        exit;
    }
}else{
    header("Location: /backsenac");
}

?>

<h1>EDITAR CONTATO</h1>

<form method="POST" action="editarContatoSubmit.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    Nome: <br>
    <Input type="text" name="nome" value="<?php echo $info['nome']; ?>"/>
    <br>telefone: <br>
    <Input type="text" name="telefone" value="<?php echo $info['telefone']; ?>"/>
    <br>endereco: <br>
    <Input type="text" name="endereco" value="<?php echo $info['endereco']; ?>"/>
    <br>dt_nasc: <br>
    <Input type="date" name="dt_nasc" value="<?php echo $info['dt_nasc']; ?>"/>
    <br>descricao: <br>
    <Input type="text" name="descricao" value="<?php echo $info['descricao']; ?>"/>
    <br>linkedin: <br>
    <Input type="text" name="linkedin" value="<?php echo $info['linkedin']; ?>"/>
    <br>email: <br>
    <Input type="text" name="email" value="<?php echo $info['email']; ?>"/>
    <br>foto: <br>
    <Input type="text" name="foto" value="<?php echo $info['foto']; ?>"/><br>
    <Input type="submit" name="btAlterar" value="ALTERAR"/>
    
    
</form>