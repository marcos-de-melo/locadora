<h2>Lista de Categorias</h2>


<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome da Categoria</th>
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

            </tr>
        <?php
        }
        ?>
    </tbody>

</table>