<h2>Todos enderecos cadastrados</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID USUARIO</th>
            <th>RUA</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>CEP</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    foreach ($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['idusuario']?></td>
        <td><?=$endereco['rua']?></td>
        <td><?=$endereco['bairro']?></td>
        <td><?=$endereco['cidade']?></td>
        <td><?=$endereco['cep']?></td>
        <td><a href="./endereco/editar/<?=$endereco['idendereco']?>" class="btn btn-info">edit</a></td>
        <td><a href="./endereco/deletar/<?=$endereco['idendereco']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>
