<h2>Lista de Categorias</h2>
<div>
    <a href="index.php?menu=cad-categorias">Cadastrar nova Categoria</a>
</div>

<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome da Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbcategorias order by nomeCategoria asc";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idCategoria"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td><a href="index.php?menu=editar-categorias&idCategoria=<?=$dados["idCategoria"]?>">Editar</a></td>
                <td><a href="index.php?menu=excluir-categorias&idCategoria=<?=$dados["idCategoria"]?>">excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>