<?php
    include 'class/contatos.class.php';
    $contato = new Contatos();
?>

<h1>Agenda Senac</h1>
<hr>
<button><a href="adicionarContato.php">Adicionar</a></button>
<table border="3" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>ENDEREÇO</th>
        <th>NASCIMENTO</th>
        <th>DESCRIÇÃO</th>
        <th>LINKEDIN</th>
        <th>EMAIL</th>
        <th>FOTO</th>''
        <th>AÇÕES</th>
    </tr>
    <?php
        $lista = $contato->listar();
        foreach($lista as $item):
    ?>
    <tbody>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['nome']?></td>
            <td><?php echo $item['telefone']?></td>
            <td><?php echo $item['endereco']?></td>
            <td><?php echo $item['dt_nasc']?></td>
            <td><?php echo $item['descricao']?></td>
            <td><?php echo $item['linkedin']?></td>
            <td><?php echo $item['email']?></td>
            <td><?php echo $item['foto']?></td>
            <td>
                <a href="editarContato.php?id=<?php echo $item['id'];?>">EDITAR</a>
                <a href="excluirContato.php?id=<?php echo $item['id'];?>"onClick="return confirm('Tem certeza que quer excluir este contato?')">| EXCLUIR</a>
            </td>
        </tr>
    </tbody>
    <?php
        endforeach;
    ?>
</table>