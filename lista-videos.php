<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Duração do Filme</th>
            <th>Valor da Locação</th>
            <th>Categoria</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM 
        tbfilmes as f inner join tbcategorias as c 
        on f.idCategoria = c.idCategoria 
        order by tituloFilme asc";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>
            <tr>
                <td><?= $dados["idFilme"] ?></td>
                <td><?= $dados["tituloFilme"] ?></td>
                <td><?= $dados["duracaoFilme"] ?></td>
                <td><?= $dados["valorLocacao"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td><a href="index.php?menu=editar-videos&idFilme=<?=$dados["idFilme"]?>">Editar</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>