<h2>Selecione um endereço</h2>
 <?php if (!empty($enderecos)){ ?>
<table class="table">
    <thead>
        <tr>
            <th>RUA</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>CEP</th>
        </tr>
    </thead>
    <?php
    foreach ($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['rua']?></td>
        <td><?=$endereco['bairro']?></td>
        <td><?=$endereco['cidade']?></td>
        <td><?=$endereco['cep']?></td>
        <td><a href="./endereco/esse/<?=$endereco['idendereco']?>" class="btn btn-info">Quero esse</a></td>
    </tr>
    <?php endforeach; ?>
</table>
 <?php }else{ ?>
<h3>Você não tem endereços cadastrados :0</h3>
    <?php } ?>
<a href="./endereco/adicionar" class="btn btn-primary">Adicionar novo endereço</a>

